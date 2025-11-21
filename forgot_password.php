<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/HireMesh2/Images/logo.png" />
    <title>Forgot Password</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background: url("/HireMesh2/Images/Sign.png") no-repeat center center fixed; background-size: cover; min-height: 100vh; display: flex; justify-content: center; align-items: center; padding: 20px; }
        .container { background: white; border-radius: 24px; padding: 40px 50px; width: 100%; max-width: 550px; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15); }
        .title { text-align: center; font-size: 32px; font-weight: 700; color: #1a1a1a; margin-bottom: 12px; }
        .subtitle { text-align: center; color: #666; font-size: 15px; margin-bottom: 30px; line-height: 1.5; }
        .form-group { margin-bottom: 20px; }
        label { display: block; color: #666; font-size: 14px; margin-bottom: 8px; }
        .required { color: #ff006e; }
        input { width: 100%; padding: 12px 0; border: none; border-bottom: 2px solid #e0e0e0; font-size: 15px; color: #333; background: transparent; outline: none; transition: border-color 0.3s; }
        input:focus { border-bottom-color: #0066ff; }
        .login-button { width: 100%; padding: 16px; background: #0066ff; color: white; border: none; border-radius: 12px; font-size: 16px; font-weight: 600; cursor: pointer; transition: background 0.3s; margin-bottom: 20px; }
        .login-button:hover { background: #0052cc; }
        .signin-text { text-align: center; color: #666; font-size: 14px; }
        .signin-link { color: #1a1a1a; font-weight: 600; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Forgot Password</h1>
        <p class="subtitle">Enter your email address and we will send you a code to reset your password.</p>

        <?php
        // Menampilkan pesan error jika ada
        if (isset($_SESSION['forgot_error'])) {
            echo '<p style="color: red; text-align: center; margin-bottom: 15px;">' . htmlspecialchars($_SESSION['forgot_error']) . '</p>';
            unset($_SESSION['forgot_error']);
        }
        ?>

        <form action="forgot_process.php" method="POST">
            <div class="form-group">
                <label>Email address <span class="required">*</span></label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <button type="submit" class="login-button">Send Reset Code</button>

            <p class="signin-text">Remember your password? <a href="login.php" class="signin-link">Log In</a></p>
        </form>
    </div>
</body>
</html>