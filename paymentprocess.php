<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Processing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --sidebar: rgba(240, 241, 245, 1);
            --bg: rgba(245, 250, 255, 1);
            --card: rgba(255, 255, 255, 1);
            --border: rgba(209, 209, 214, 0.5);
            --text-1: rgba(28, 28, 30, 1);
            --text-2: rgba(75, 88, 101, 1);
            --primary: rgba(0, 122, 255, 1);
            --hoverbiru: rgba(239, 247, 255, 1);
            --aktif: rgba(52, 199, 89, 1);
            --hoveraktif: rgba(236, 253, 243, 1);
            --warning: rgba(224, 62, 92, 1);
            --h1-font-family: "Poppins", Helvetica;
            --h1-font-weight: 700;
            --h1-font-size: 40px;
            --h2-font-family: "Poppins", Helvetica;
            --h2-font-weight: 600;
            --h2-font-size: 36px;
            --h3-font-family: "Poppins", Helvetica;
            --h3-font-weight: 500;
            --h3-font-size: 30px;
            --h4-font-family: "Poppins", Helvetica;
            --h4-font-weight: 500;
            --h4-font-size: 24px;
            --body-large-font-family: "Poppins", Helvetica;
            --body-large-font-weight: 400;
            --body-large-font-size: 18px;
            --body-font-family: "Poppins", Helvetica;
            --body-font-weight: 400;
            --body-font-size: 16px;
            --caption-font-family: "Poppins", Helvetica;
            --caption-font-weight: 300;
            --caption-font-size: 14px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--body-font-family);
            background: var(--bg);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .process-container {
            max-width: 600px;
            width: 100%;
        }

        .process-card {
            background: var(--card);
            border-radius: 24px;
            padding: 48px;
            text-align: center;
            box-shadow: 1px -1px 4px 0px rgba(0, 0, 0, 0.25);
            position: relative;
            overflow: hidden;
        }

        .process-card::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, var(--hoverbiru) 0%, transparent 70%);
            pointer-events: none;
        }

        .process-card::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(239, 247, 255, 0.5) 0%, transparent 70%);
            pointer-events: none;
        }

        .icon-container {
            width: 120px;
            height: 120px;
            margin: 0 auto 32px;
            position: relative;
            z-index: 1;
        }

        .success-icon {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--aktif) 0%, #2ecc71 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: scaleIn 0.5s ease-out;
            box-shadow: 0 8px 24px rgba(52, 199, 89, 0.3);
        }

        .checkmark {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: block;
            stroke-width: 3;
            stroke: white;
            stroke-miterlimit: 10;
            animation: checkmark 0.8s ease-in-out 0.4s both;
        }

        .checkmark-circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 3;
            stroke-miterlimit: 10;
            stroke: white;
            fill: none;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }

        .checkmark-check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.4s forwards;
        }

        @keyframes scaleIn {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes stroke {
            100% {
                stroke-dashoffset: 0;
            }
        }

        .process-title {
            font-family: var(--h2-font-family);
            font-weight: var(--h2-font-weight);
            font-size: var(--h2-font-size);
            color: var(--text-1);
            margin-bottom: 16px;
            position: relative;
            z-index: 1;
        }

        .process-message {
            font-size: var(--body-large-font-size);
            color: var(--text-2);
            margin-bottom: 12px;
            line-height: 1.6;
            position: relative;
            z-index: 1;
        }

        .process-submessage {
            font-size: var(--body-font-size);
            color: var(--text-2);
            margin-bottom: 40px;
            position: relative;
            z-index: 1;
        }

        .info-box {
            background: var(--hoverbiru);
            border: 1px solid var(--primary);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 32px;
            position: relative;
            z-index: 1;
        }

        .info-box-title {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 8px;
            font-size: var(--body-font-size);
        }

        .info-box-text {
            font-size: var(--body-font-size);
            color: var(--text-2);
            line-height: 1.6;
        }

        .status-timeline {
            background: var(--bg);
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 32px;
            text-align: left;
            position: relative;
            z-index: 1;
        }

        .timeline-item {
            display: flex;
            gap: 16px;
            margin-bottom: 20px;
            align-items: flex-start;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-dot {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: var(--aktif);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: white;
            font-size: 14px;
            font-weight: 600;
        }

        .timeline-dot.pending {
            background: var(--border);
        }

        .timeline-content h4 {
            font-size: var(--body-font-size);
            color: var(--text-1);
            font-weight: 600;
            margin-bottom: 4px;
        }

        .timeline-content p {
            font-size: var(--caption-font-size);
            color: var(--text-2);
        }

        .button-group {
            display: flex;
            gap: 16px;
            position: relative;
            z-index: 1;
        }

        .btn {
            flex: 1;
            padding: 16px 32px;
            border-radius: 12px;
            font-family: var(--body-font-family);
            font-size: var(--body-font-size);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            box-shadow: 0 4px 12px rgba(0, 122, 255, 0.3);
        }

        .btn-primary:hover {
            background: rgba(0, 122, 255, 0.9);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 122, 255, 0.4);
        }

        .btn-secondary {
            background: white;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-secondary:hover {
            background: var(--hoverbiru);
            transform: translateY(-2px);
        }

        .btn-icon {
            font-size: 20px;
        }

        .notification-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--hoveraktif);
            color: var(--aktif);
            padding: 8px 16px;
            border-radius: 50px;
            font-size: var(--caption-font-size);
            font-weight: 600;
            margin-bottom: 24px;
            position: relative;
            z-index: 1;
        }

        .pulse-dot {
            width: 8px;
            height: 8px;
            background: var(--aktif);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(52, 199, 89, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(52, 199, 89, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(52, 199, 89, 0);
            }
        }

        @media (max-width: 640px) {
            .process-card {
                padding: 32px 24px;
            }

            .process-title {
                font-size: 28px;
            }

            .button-group {
                flex-direction: column;
            }

            .icon-container {
                width: 100px;
                height: 100px;
            }
        }
    </style>
</head>
<body>
    <div class="process-container">
        <div class="process-card">
            <div class="notification-badge">
                <span class="pulse-dot"></span>
                Payment Submitted Successfully
            </div>

            <div class="icon-container">
                <div class="success-icon">
                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                        <circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none"/>
                        <path class="checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                    </svg>
                </div>
            </div>

            <h1 class="process-title">Payment Received!</h1>
            <p class="process-message">Your payment proof has been successfully submitted.</p>
            <p class="process-submessage">Please wait a moment while our admin team verifies and processes your payment.</p>

            <div class="info-box">
                <div class="info-box-title">
                    <span>ℹ️</span>
                    <span>Processing Time</span>
                </div>
                <p class="info-box-text">Payment verification typically takes 10-30 minutes during business hours. You'll receive a notification once your payment is confirmed.</p>
            </div>

            <div class="status-timeline">
                <div class="timeline-item">
                    <div class="timeline-dot">✓</div>
                    <div class="timeline-content">
                        <h4>Payment Proof Uploaded</h4>
                        <p>Your payment proof has been received</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot pending">⏱</div>
                    <div class="timeline-content">
                        <h4>Admin Verification</h4>
                        <p>Our team is verifying your payment</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot pending">📧</div>
                    <div class="timeline-content">
                        <h4>Confirmation Email</h4>
                        <p>You'll receive confirmation via email</p>
                    </div>
                </div>
            </div>

            <div class="button-group">
                <button class="btn btn-secondary" onclick="goToHistory()">
                    <span class="btn-icon">📋</span>
                    View Purchase History
                </button>
                <button class="btn btn-primary" onclick="goToHome()">
                    <span class="btn-icon">🏠</span>
                    Back to Home
                </button>
            </div>
        </div>
    </div>

    <script>
        function goToHistory() {
            // Redirect to purchase history page
            window.location.href = "utama.php?page=profile#purchase";
        }

        function goToHome() {
            // Redirect to home/dashboard
            window.location.href = 'utama.php?page=home';
        }

        // Optional: Auto-redirect after certain time
        // setTimeout(() => {
        //     window.location.href = 'purchase-history.php';
        // }, 5000);
    </script>
</body>
</html>