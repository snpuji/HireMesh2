<?php
session_start();

// Cek apakah user datang dari halaman signup
if (!isset($_SESSION['verification_email'])) {
    // Jika tidak, tendang ke halaman login
    header("Location: login.php");
    exit;
}

$email = $_SESSION['verification_email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/HireMesh2/Images/logo.png" />
    <title>Verifikasi OTP</title>
    <style>
        /* Minimal style, silakan copy dari login.php/Signup.php untuk full style */
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background: #f0f2f5; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .container { background: white; border-radius: 24px; padding: 40px 50px; width: 100%; max-width: 550px; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15); }
        .title { text-align: center; font-size: 32px; font-weight: 700; color: #1a1a1a; margin-bottom: 12px; }
        .subtitle { text-align: center; color: #666; font-size: 15px; margin-bottom: 30px; }
        .form-group { margin-bottom: 20px; }
        label { display: block; color: #666; font-size: 14px; margin-bottom: 8px; }
        input { width: 100%; padding: 12px; border: 1px solid #e0e0e0; border-radius: 8px; font-size: 16px; text-align: center; letter-spacing: 5px; }
        .login-button { width: 100%; padding: 16px; background: #0066ff; color: white; border: none; border-radius: 12px; font-size: 16px; font-weight: 600; cursor: pointer; transition: background 0.3s; margin-bottom: 20px; }
        .login-button:hover { background: #0052cc; }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Verifikasi Akun Anda</h1>
        <p class="subtitle">Kami telah mengirimkan 6-digit kode OTP ke email Anda:<br><b><?php echo htmlspecialchars($email); ?></b></p>
        <p class="subtitle" style="margin-top:-20px; margin-bottom: 20px;">Silakan cek email Anda (termasuk folder Spam).</p>

        <?php
        // Menampilkan pesan error jika ada
        if (isset($_SESSION['otp_error'])) {
            echo '<p style="color: red; text-align: center; margin-bottom: 15px;">' . htmlspecialchars($_SESSION['otp_error']) . '</p>';
            unset($_SESSION['otp_error']);
        }
        ?>

        <form action="verify_process.php" method="POST">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
            
            <div class="form-group">
                <label for="otp">Masukkan 6-Digit Kode OTP</label>
                <input type="text" id="otp" name="otp" maxlength="6" required autocomplete="off">
            </div>

            <button type="submit" class="login-button">Verifikasi Sekarang</button>
        </form>
    </div>
</body>
</html>