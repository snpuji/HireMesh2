<?php
// Selalu mulai session
session_start();

// 1. Memanggil file koneksi DB dan file email
require 'db.php';
require 'send_email.php'; // Menggunakan file email baru kita

// 2. Menggunakan namespace PHPMailer (pindahkan ke send_email.php)
// (Tidak perlu 'use' lagi di sini, sudah dihandle di send_email.php)

// 3. Hapus fungsi sendLoginNotification, karena sudah ada di send_email.php

// 4. Proses Logika Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi sederhana
    if (empty($email) || empty($password)) {
        $_SESSION['login_error'] = "Email dan password tidak boleh kosong.";
        header("Location: login.php");
        exit;
    }

    // Cari user berdasarkan email
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    // 5. Verifikasi Password dan Status Verifikasi
    if ($user && password_verify($password, $user['password_hash'])) {
        
        // --- PENGECEKAN BARU ---
        // Cek apakah user sudah terverifikasi
        if ($user['is_verified'] == 0) {
            // User benar, tapi akun belum aktif
            $_SESSION['login_error'] = "Akun Anda belum terverifikasi. Silakan cek email Anda untuk kode OTP.";
            
            // Kirim ulang OTP jika perlu? (Opsional, untuk sekarang kita arahkan saja)
            // Simpan email ke session agar halaman verify_otp bisa menggunakannya
            $_SESSION['verification_email'] = $user['email'];
            header("Location: verify_otp.php");
            exit;
        }
        // --- AKHIR PENGECEKAN BARU ---

        // Login Berhasil! (User ada, password benar, DAN terverifikasi)
        
        // 1. Simpan data user ke session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['name']; // Ambil nama user
        
        // 2. Kirim notifikasi email (memanggil fungsi dari send_email.php)
        sendLoginNotificationEmail($user['email'], $user['name']);

        // 3. Arahkan ke halaman utama (SESUAI PERMINTAAN ANDA)
        header("Location: utama.php?page=home");
        exit;

    } else {
        // Login Gagal! (Email atau password salah)
        $_SESSION['login_error'] = "Email atau password yang Anda masukkan salah.";
        header("Location: login.php");
        exit;
    }

} else {
    // Jika file ini diakses langsung tanpa POST, kembalikan ke login
    header("Location: login.php");
    exit;
}
?>