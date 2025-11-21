<?php
// Pastikan file db.php sudah ada dari langkah 4
require 'db.php';

// --- Data User untuk Tes ---
$email_tes = 'srinuryanipujiastuti@gmail.com';
$password_tes = 'password123';
// --------------------------

// Hashing password
$hash = password_hash($password_tes, PASSWORD_BCRYPT);

try {
    $stmt = $pdo->prepare("INSERT INTO users (email, password_hash) VALUES (?, ?)");
    if ($stmt->execute([$email_tes, $hash])) {
        echo "<h1>User Tes Berhasil Dibuat!</h1>";
        echo "<p>Email: $email_tes</p>";
        echo "<p>Password: $password_tes</p>";
        echo "<p>Silakan hapus file 'create_test_user.php' ini sekarang.</p>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    echo "<br>Pastikan tabel 'users' sudah dibuat dan email '$email_tes' belum terdaftar.";
}
?>