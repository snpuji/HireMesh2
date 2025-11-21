<?php
// File ini akan berisi semua fungsi terkait pengiriman email

// Memanggil autoload Composer
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * Fungsi untuk mengirim email verifikasi OTP (Sudah ada)
 */
function sendVerificationEmail($recipient_email, $recipient_name, $otp_code) {
    $mail = new PHPMailer(true);
    
    try {
        // Pengaturan Server
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'cryptocuan07@gmail.com'; // Email Gmail Anda
        $mail->Password   = 'epmu qyse vixz vzsm'; // Sandi Aplikasi Anda
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Penerima
        $mail->setFrom('cryptocuan07@gmail.com', 'HireMesh Security');
        $mail->addAddress($recipient_email, $recipient_name); 

        // Konten Email
        $mail->isHTML(true);
        $mail->Subject = 'Kode Verifikasi Akun HireMesh Anda';
        $mail->Body    = "Halo <b>" . htmlspecialchars($recipient_name) . "</b>,<br><br>" .
                         "Gunakan kode OTP di bawah ini untuk memverifikasi akun Anda:<br><br>" .
                         "<h1 style='text-align:center; color: #0066ff;'>" . $otp_code . "</h1>" .
                         "<br>Kode ini akan kedaluwarsa dalam 10 menit.<br><br>";
        $mail->AltBody = "Halo " . htmlspecialchars($recipient_name) . ", Kode verifikasi Anda adalah: " . $otp_code . ".";

        $mail->send();
        return true;
    } catch (Exception $e) {
        $_SESSION['signup_error'] = "Gagal mengirim email verifikasi. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}

/**
 * === FUNGSI BARU UNTUK RESET PASSWORD ===
 */
function sendPasswordResetEmail($recipient_email, $recipient_name, $otp_code) {
    $mail = new PHPMailer(true);
    
    try {
        // Pengaturan Server
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'cryptocuan07@gmail.com';
        $mail->Password   = 'epmu qyse vixz vzsm';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Penerima
        $mail->setFrom('cryptocuan07@gmail.com', 'HireMesh Security');
        $mail->addAddress($recipient_email, $recipient_name); 

        // Konten Email (Teksnya berbeda)
        $mail->isHTML(true);
        $mail->Subject = 'Permintaan Reset Password Akun HireMesh';
        $mail->Body    = "Halo <b>" . htmlspecialchars($recipient_name) . "</b>,<br><br>" .
                         "Kami menerima permintaan untuk mereset password Anda. Gunakan kode OTP di bawah ini:<br><br>" .
                         "<h1 style='text-align:center; color: #0066ff;'>" . $otp_code . "</h1>" .
                         "<br>Kode ini akan kedaluwarsa dalam 10 menit.<br><br>" .
                         "Jika Anda tidak meminta reset password, abaikan email ini.<br><br>";
        $mail->AltBody = "Halo " . htmlspecialchars($recipient_name) . ", Kode reset password Anda adalah: " . $otp_code . ".";

        $mail->send();
        return true;
    } catch (Exception $e) {
        // Set session error yang berbeda
        $_SESSION['forgot_error'] = "Gagal mengirim email. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}


/**
 * Fungsi untuk mengirim email notifikasi login (Sudah ada)
 */
function sendLoginNotificationEmail($recipient_email, $recipient_name) {
    $mail = new PHPMailer(true);
    
    try {
        // Pengaturan Server
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'cryptocuan07@gmail.com';
        $mail->Password   = 'epmu qyse vixz vzsm'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Penerima
        $mail->setFrom('cryptocuan07@gmail.com', 'HireMesh Security');
        $mail->addAddress($recipient_email, $recipient_name); 

        // Konten Email
        $mail->isHTML(true);
        $mail->Subject = 'Notifikasi Login Baru ke Akun HireMesh Anda';
        $mail->Body    = "Halo " . htmlspecialchars($recipient_name) . ",<br><br>Aktivitas login baru terdeteksi di akun Anda.<br><br>";
        
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
?>