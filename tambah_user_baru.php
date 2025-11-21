<?php
// 1. Panggil koneksi database
// Pastikan file db.php Anda ada di lokasi yang sama
require 'db.php';

// --- Data User Baru yang Anda Inginkan ---
$email_baru = 'srinuryanipujiastuti@gmail.com';
$password_baru = 'password123';
// ---------------------------------------

echo "<h1>Menambahkan User Baru...</h1>";

// 2. Enkripsi/Hash password (SANGAT PENTING!)
// Kita tidak boleh menyimpan 'password123' langsung ke database
$hash = password_hash($password_baru, PASSWORD_BCRYPT);

// 3. Masukkan ke database
try {
    $stmt = $pdo->prepare("INSERT INTO users (email, password_hash) VALUES (?, ?)");
    
    // Eksekusi query dengan data baru
    if ($stmt->execute([$email_baru, $hash])) {
        echo "<h2>SUKSES! User Baru Berhasil Dibuat!</h2>";
        echo "<p>Email: <b>$email_baru</b></p>";
        echo "<p>Password: <b>$password_baru</b></p>";
        echo "<hr>";
        echo "<p>Silakan kembali ke <a href='login.php'>halaman login</a> dan coba login dengan akun ini.</p>";
    }
} catch (PDOException $e) {
    // Cek apakah error karena email duplikat (Error code 1062)
    if ($e->errorInfo[1] == 1062) {
        echo "<h2>GAGAL!</h2>";
        echo "<p>Email <b>$email_baru</b> sudah terdaftar di database.</p>";
        echo "<p>Anda tidak perlu menjalankan file ini lagi. Silakan <a href='login.php'>langsung login</a>.</p>";
    } else {
        // Tampilkan error lain jika ada
        echo "Error: " . $e->getMessage();
    }
}
?>