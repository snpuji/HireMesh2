<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $otp_input = $_POST['otp'];
    $current_time = date('Y-m-d H:i:s');

    try {
        // 1. Ambil data user dari database
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if (!$user) {
            $_SESSION['otp_error'] = "Terjadi kesalahan. Email tidak ditemukan.";
            header("Location: verify_otp.php");
            exit;
        }

        // 2. Cek apakah user sudah terverifikasi
        if ($user['is_verified'] == 1) {
            $_SESSION['signup_success'] = "Akun Anda sudah terverifikasi. Silakan login.";
            header("Location: login.php");
            exit;
        }

        // 3. Cek apakah OTP salah
        if ($user['otp_code'] != $otp_input) {
            $_SESSION['otp_error'] = "Kode OTP yang Anda masukkan salah.";
            header("Location: verify_otp.php");
            exit;
        }

        // 4. Cek apakah OTP sudah kedaluwarsa
        if ($current_time > $user['otp_expires']) {
            $_SESSION['signup_error'] = "Kode OTP Anda sudah kedaluwarsa. Silakan daftar ulang untuk mendapatkan kode baru.";
            // Hapus data user lama agar bisa daftar ulang dengan email yg sama
            $stmt = $pdo->prepare("DELETE FROM users WHERE email = ? AND is_verified = 0");
            $stmt->execute([$email]);
            
            header("Location: Signup.php");
            exit;
        }

        // 5. Jika lolos semua pengecekan: VERIFIKASI BERHASIL
        // Update status verifikasi dan hapus OTP
        $stmt = $pdo->prepare("UPDATE users SET is_verified = 1, otp_code = NULL, otp_expires = NULL WHERE email = ?");
        $stmt->execute([$email]);

        // Hapus session email verifikasi
        unset($_SESSION['verification_email']);

        // Set pesan sukses untuk halaman login
        $_SESSION['signup_success'] = "Verifikasi berhasil! Silakan login dengan akun baru Anda.";
        header("Location: login.php");
        exit;

    } catch (PDOException $e) {
        $_SESSION['otp_error'] = "Database Error: " . $e->getMessage();
        header("Location: verify_otp.php");
        exit;
    }

} else {
    header("Location: login.php");
    exit;
}
?>