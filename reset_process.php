<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $otp_input = $_POST['otp'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $current_time = date('Y-m-d H:i:s');

    // 1. Validasi Input
    if (empty($otp_input) || empty($new_password) || empty($confirm_password)) {
        $_SESSION['reset_error'] = "All fields are required.";
        header("Location: reset_password.php");
        exit;
    }

    if ($new_password != $confirm_password) {
        $_SESSION['reset_error'] = "Passwords do not match.";
        header("Location: reset_password.php");
        exit;
    }

    try {
        // 2. Ambil data user
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if (!$user) {
            $_SESSION['reset_error'] = "An error occurred. User not found.";
            header("Location: reset_password.php");
            exit;
        }

        // 3. Validasi OTP
        if ($user['otp_code'] != $otp_input) {
            $_SESSION['reset_error'] = "The OTP code you entered is incorrect.";
            header("Location: reset_password.php");
            exit;
        }

        // 4. Validasi Waktu Kedaluwarsa OTP
        if ($current_time > $user['otp_expires']) {
            $_SESSION['reset_error'] = "The OTP code has expired. Please request a new one.";
            header("Location: forgot_password.php"); // Kirim kembali ke awal
            exit;
        }

        // 5. SEMUA BERHASIL: Update Password
        
        // Hash password baru
        $password_hash = password_hash($new_password, PASSWORD_BCRYPT);
        
        // Update database dengan password baru dan hapus OTP
        $stmt = $pdo->prepare("UPDATE users SET password_hash = ?, otp_code = NULL, otp_expires = NULL WHERE id = ?");
        $stmt->execute([$password_hash, $user['id']]);

        // 6. Selesai
        // Hapus session reset dan set pesan sukses untuk halaman login
        unset($_SESSION['reset_email']);
        $_SESSION['signup_success'] = "Your password has been reset successfully. Please log in.";
        header("Location: login.php");
        exit;

    } catch (PDOException $e) {
        $_SESSION['reset_error'] = "Database Error: " . $e->getMessage();
        header("Location: reset_password.php");
        exit;
    }

} else {
    header("Location: login.php");
    exit;
}
?>