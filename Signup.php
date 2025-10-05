<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/HireMesh2/Images/logo.png" />
    <title>Sign Up Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            background: white;
            border-radius: 24px;
            padding: 40px 50px;  /* tadinya 50px, dikurangi biar border lebih keliatan */
            width: 100%;
            max-width: 550px;    /* biar lebih ramping, dari 600px jadi 480px */
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            gap: 10px;
        }

        .back-button {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #666;
            font-size: 16px;
            background: none;
            border: none;
            cursor: pointer;
            margin-bottom: 20px;
            padding: 0;
        }

        .back-button:hover {
            color: #333;
        }

        .icon-wrapper {
            display: flex;
            justify-content: center;
            margin-bottom: 24px;
        }

        .icon-wrapper .logo {
            width: 120px; /* bisa disesuaikan */
            height: auto;
        }

        /* Background ganti dari gradient ke image */
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: url("/HireMesh2/Images/Sign.png") no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .title {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 12px;
        }

        .subtitle {
            text-align: center;
            color: #666;
            font-size: 15px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            color: #666;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .required {
            color: #ff006e;
        }

        input, select {
            width: 100%;
            padding: 12px 0;
            border: none;
            border-bottom: 2px solid #e0e0e0;
            font-size: 15px;
            color: #333;
            background: transparent;
            outline: none;
            transition: border-color 0.3s;
        }

        input:focus, select:focus {
            border-bottom-color: #0066ff;
        }

        .password-wrapper {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 0;
            top: 12px;
            background: none;
            border: none;
            cursor: pointer;
            color: #999;
            font-size: 20px;
        }

        select {
            appearance: none;
            cursor: pointer;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23666' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 0 center;
            padding-right: 20px;
        }

        .checkbox-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #666;
            font-size: 14px;
            cursor: pointer;
        }

        input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .forgot-link {
            color: #0066ff;
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }

        .login-button {
            width: 100%;
            padding: 16px;
            background: #0066ff;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            margin-bottom: 20px;
        }

        .login-button:hover {
            background: #0052cc;
        }

        .signin-text {
            text-align: center;
            color: #666;
            font-size: 14px;
        }

        .signin-link {
            color: #1a1a1a;
            font-weight: 600;
            text-decoration: none;
        }

        .signin-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="back-button" onclick="history.back()">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M12.5 15L7.5 10L12.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Previous
        </button>

        <div class="icon-wrapper">
            <img src="/HireMesh2/Images/logo.png" alt="Logo HireMesh" class="logo">
        </div>

        <h1 class="title">Sign Up</h1>
        <p class="subtitle">Showcase your best work, and discover your dream career.</p>

        <form id="signupForm">
            <div class="form-group">
                <label>Your first and last name <span class="required">*</span></label>
                <input type="text" id="name" required>
            </div>

            <div class="form-group">
                <label>Email address <span class="required">*</span></label>
                <input type="email" id="email" required>
            </div>

            <div class="form-group">
                <label>Create password <span class="required">*</span></label>
                <div class="password-wrapper">
                    <input type="password" id="password" required>
                    <button type="button" class="toggle-password" onclick="togglePassword()">
                        <svg id="eyeIcon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="12" r="3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="checkbox-wrapper">
                <label class="checkbox-label">
                    <input type="checkbox" id="remember">
                    Remember me
                </label>
                <a href="#" class="forgot-link">Forgot password?</a>
            </div>

            <button type="submit" class="login-button">Sign Up</button>

            <p class="signin-text">Have an account? <a href="login.php" class="signin-link">Log In</a></p>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }

        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Form submitted! This is a demo.');
        });
    </script>
</body>
</html>