<?php
// Mulai session untuk menyimpan pesan error/sukses
session_start();

// Panggil file koneksi database dan file email
require 'db.php';
require 'send_email.php'; // Memanggil file baru kita

// Cek apakah form disubmit menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // 2. Validasi Sederhana
    if (empty($name) || empty($email) || empty($password)) {
        $_SESSION['signup_error'] = "Semua kolom wajib diisi.";
        header("Location: Signup.php");
        exit;
    }

    // 3. Cek apakah email sudah terdaftar DAN terverifikasi
    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? AND is_verified = 1");
        $stmt->execute([$email]);
        $existing_user = $stmt->fetch();

        if ($existing_user) {
            $_SESSION['signup_error'] = "Email ini sudah terdaftar dan terverifikasi. Silakan login.";
            header("Location: login.php");
            exit;
        }

        // 4. Siapkan data untuk user baru atau update user lama yang belum verify
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $otp_code = rand(100000, 999999); // Buat 6 digit kode OTP
        $otp_expires = date('Y-m-d H:i:s', strtotime('+10 minutes')); // Waktu kedaluwarsa 10 menit

        // 5. Cek apakah user ada tapi belum verify (mungkin daftar ulang)
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? AND is_verified = 0");
        $stmt->execute([$email]);
        $unverified_user = $stmt->fetch();

        if ($unverified_user) {
            // User ada, tapi belum verify. Update saja OTP dan password barunya
            $stmt = $pdo->prepare("UPDATE users SET name = ?, password_hash = ?, otp_code = ?, otp_expires = ? WHERE email = ?");
            $stmt->execute([$name, $password_hash, $otp_code, $otp_expires, $email]);
        } else {
            // User benar-benar baru, INSERT data
            $stmt = $pdo->prepare("INSERT INTO users (name, email, password_hash, otp_code, otp_expires, is_verified) VALUES (?, ?, ?, ?, ?, 0)");
            $stmt->execute([$name, $email, $password_hash, $otp_code, $otp_expires]);
        }
        
        // 6. Kirim Email Verifikasi
        if (sendVerificationEmail($email, $name, $otp_code)) {
            // Jika email berhasil dikirim
            // Simpan email di session untuk halaman verifikasi
            $_SESSION['verification_email'] = $email;
            
            // Arahkan ke halaman verifikasi OTP
            header("Location: verify_otp.php");
            exit;
        } else {
            // Jika email gagal dikirim (error sudah di-set di dalam fungsi)
            header("Location: Signup.php");
            exit;
        }

    } catch (PDOException $e) {
        $_SESSION['signup_error'] = "Terjadi kesalahan pada database: " . $e->getMessage();
        header("Location: Signup.php");
        exit;
    }

} else {
    // Jika file ini diakses langsung (bukan via POST)
    header("Location: index.php");
    exit;
}
?>