<?php
session_start();
require 'db.php';
require 'send_email.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];

    try {
        // 1. Cek apakah email ada DAN sudah terverifikasi
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? AND is_verified = 1");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user) {
            // User ditemukan dan terverifikasi
            
            // 2. Buat OTP dan waktu kedaluwarsa
            $otp_code = rand(100000, 999999);
            $otp_expires = date('Y-m-d H:i:s', strtotime('+10 minutes'));

            // 3. Simpan OTP ke database untuk user ini
            $stmt = $pdo->prepare("UPDATE users SET otp_code = ?, otp_expires = ? WHERE id = ?");
            $stmt->execute([$otp_code, $otp_expires, $user['id']]);

            // 4. Kirim email reset password
            if (sendPasswordResetEmail($user['email'], $user['name'], $otp_code)) {
                // Berhasil kirim email
                $_SESSION['reset_email'] = $user['email'];
                header("Location: reset_password.php");
                exit;
            } else {
                // Gagal kirim email (error sudah di-set di dalam fungsi)
                header("Location: forgot_password.php");
                exit;
            }

        } else {
            // Email tidak ditemukan atau akun belum terverifikasi
            $_SESSION['forgot_error'] = "No verified account was found with that email address.";
            header("Location: forgot_password.php");
            exit;
        }

    } catch (PDOException $e) {
        $_SESSION['forgot_error'] = "Database Error: " . $e->getMessage();
        header("Location: forgot_password.php");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}
?>