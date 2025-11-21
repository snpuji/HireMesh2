<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Fullstack Intensive Bootcamp</title>
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
            --h5-font-family: "Poppins", Helvetica;
            --h5-font-weight: 500;
            --h5-font-size: 20px;
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
            padding: 40px 20px;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            padding-top: 120px;
        }

        .course-detail {
            background: var(--card);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 1px -1px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .course-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 60px 40px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .course-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .course-header::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
        }

        .course-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: var(--caption-font-size);
            font-weight: 500;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .course-title {
            font-family: var(--h1-font-family);
            font-weight: var(--h1-font-weight);
            font-size: var(--h1-font-size);
            margin-bottom: 16px;
            position: relative;
            z-index: 1;
            line-height: 1.2;
        }

        .course-subtitle {
            font-size: var(--body-large-font-size);
            opacity: 0.95;
            max-width: 700px;
            position: relative;
            z-index: 1;
        }

        .course-content {
            padding: 40px;
        }

        .course-meta {
            display: flex;
            gap: 32px;
            padding: 24px 0;
            border-bottom: 1px solid var(--border);
            margin-bottom: 32px;
            flex-wrap: wrap;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .meta-icon {
            width: 44px;
            height: 44px;
            background: var(--hoverbiru);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .meta-info h4 {
            font-size: var(--body-font-size);
            color: var(--text-2);
            font-weight: 400;
            margin-bottom: 4px;
        }

        .meta-info p {
            font-size: var(--h5-font-size);
            color: var(--text-1);
            font-weight: 600;
        }

        .section-title {
            font-family: var(--h3-font-family);
            font-weight: var(--h3-font-weight);
            font-size: var(--h3-font-size);
            color: var(--text-1);
            margin-bottom: 24px;
        }

        .course-description {
            font-size: var(--body-font-size);
            color: var(--text-2);
            line-height: 1.8;
            margin-bottom: 40px;
        }

        .highlights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .highlight-card {
            background: var(--bg);
            padding: 24px;
            border-radius: 16px;
            border: 1px solid var(--border);
            transition: all 0.3s ease;
        }

        .highlight-card:hover {
            transform: translateY(-4px);
            box-shadow: 1px -1px 4px 0px rgba(0, 122, 255, 0.25), -1px 1px 4px 0px rgba(0, 122, 255, 0.25);
            border-color: var(--primary);
        }

        .highlight-icon {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, var(--primary), #00d4ff);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin-bottom: 16px;
        }

        .highlight-title {
            font-size: var(--h5-font-size);
            font-weight: 600;
            color: var(--text-1);
            margin-bottom: 8px;
        }

        .highlight-desc {
            font-size: var(--body-font-size);
            color: var(--text-2);
        }

        .curriculum-section {
            margin-bottom: 40px;
        }

        .curriculum-list {
            list-style: none;
        }

        .curriculum-item {
            background: var(--bg);
            padding: 20px 24px;
            margin-bottom: 12px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 16px;
            border: 1px solid var(--border);
            transition: all 0.3s ease;
        }

        .curriculum-item:hover {
            background: var(--hoverbiru);
            border-color: var(--primary);
        }

        .curriculum-number {
            width: 40px;
            height: 40px;
            background: var(--primary);
            color: white;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            flex-shrink: 0;
        }

        .curriculum-text {
            font-size: var(--body-font-size);
            color: var(--text-1);
            font-weight: 500;
        }

        .pricing-section {
            background: linear-gradient(135deg, var(--hoverbiru) 0%, rgba(239, 247, 255, 0.3) 100%);
            padding: 40px;
            border-radius: 20px;
            margin-bottom: 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 24px;
        }

        .pricing-info {
            flex: 1;
        }

        .pricing-label {
            font-size: var(--body-font-size);
            color: var(--text-2);
            margin-bottom: 12px;
        }

        .price-container {
            display: flex;
            align-items: baseline;
            gap: 16px;
            margin-bottom: 12px;
        }

        .current-price {
            font-family: var(--h2-font-family);
            font-weight: var(--h2-font-weight);
            font-size: var(--h2-font-size);
            color: var(--primary);
        }

        .original-price {
            font-size: var(--h5-font-size);
            color: var(--text-2);
            text-decoration: line-through;
        }

        .discount-badge {
            display: inline-block;
            background: var(--warning);
            color: white;
            padding: 6px 16px;
            border-radius: 50px;
            font-size: var(--caption-font-size);
            font-weight: 600;
        }

        .cta-container {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        .btn-enroll {
            background: var(--primary);
            color: white;
            padding: 18px 48px;
            border-radius: 12px;
            font-size: var(--body-large-font-size);
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 122, 255, 0.3);
        }

        .btn-enroll:hover {
            background: rgba(0, 122, 255, 0.9);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 122, 255, 0.4);
        }

        .btn-enroll:active {
            transform: translateY(0);
        }

        .date-info {
            display: flex;
            align-items: center;
            gap: 12px;
            background: white;
            padding: 16px 24px;
            border-radius: 12px;
            border: 1px solid var(--border);
        }

        .date-icon {
            font-size: 24px;
            color: var(--primary);
        }

        .date-text {
            font-size: var(--body-font-size);
            color: var(--text-1);
            font-weight: 500;
        }

        .instructor-section {
            display: flex;
            align-items: center;
            gap: 24px;
            padding: 32px;
            background: var(--bg);
            border-radius: 16px;
            border: 1px solid var(--border);
        }

        .instructor-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            font-weight: 700;
            color: white;
            flex-shrink: 0;
        }

        .instructor-info h3 {
            font-size: var(--h5-font-size);
            color: var(--text-1);
            margin-bottom: 8px;
        }

        .instructor-info p {
            font-size: var(--body-font-size);
            color: var(--text-2);
        }

        @media (max-width: 768px) {
            .course-header {
                padding: 40px 24px;
            }

            .course-title {
                font-size: 32px;
            }

            .course-content {
                padding: 24px;
            }

            .pricing-section {
                padding: 24px;
                flex-direction: column;
                align-items: flex-start;
            }

            .cta-container {
                width: 100%;
                flex-direction: column;
            }

            .btn-enroll {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="course-detail">
            <div class="course-header">
                <div class="course-badge">🔥 Most Popular Bootcamp</div>
                <h1 class="course-title">DIGITAL MARKETING: FULLSTACK INTENSIVE BOOTCAMP</h1>
                <p class="course-subtitle">Master all aspects of digital marketing from SEO, social media, content creation, to paid advertising in this comprehensive intensive program</p>
            </div>

            <div class="course-content">
                <div class="course-meta">
                    <div class="meta-item">
                        <div class="meta-icon">⏱️</div>
                        <div class="meta-info">
                            <h4>Duration</h4>
                            <p>8 Weeks</p>
                        </div>
                    </div>
                    <div class="meta-item">
                        <div class="meta-icon">📚</div>
                        <div class="meta-info">
                            <h4>Modules</h4>
                            <p>12 Modules</p>
                        </div>
                    </div>
                    <div class="meta-item">
                        <div class="meta-icon">👥</div>
                        <div class="meta-info">
                            <h4>Students</h4>
                            <p>2,847</p>
                        </div>
                    </div>
                    <div class="meta-item">
                        <div class="meta-icon">⭐</div>
                        <div class="meta-info">
                            <h4>Rating</h4>
                            <p>4.9/5.0</p>
                        </div>
                    </div>
                </div>

                <h2 class="section-title">About This Bootcamp</h2>
                <p class="course-description">
                    Transform yourself into a complete digital marketing professional with our intensive fullstack bootcamp. This program is designed for beginners and professionals who want to master all aspects of digital marketing in today's competitive landscape. You'll learn from industry experts with real-world case studies and hands-on projects that will build your portfolio and prepare you for immediate success in the field.
                </p>

                <h2 class="section-title">What You'll Get</h2>
                <div class="highlights-grid">
                    <div class="highlight-card">
                        <div class="highlight-icon">🎯</div>
                        <h3 class="highlight-title">Career Support</h3>
                        <p class="highlight-desc">1-on-1 career coaching and job placement assistance</p>
                    </div>
                    <div class="highlight-card">
                        <div class="highlight-icon">💼</div>
                        <h3 class="highlight-title">Portfolio Projects</h3>
                        <p class="highlight-desc">Build 5+ real-world projects for your portfolio</p>
                    </div>
                    <div class="highlight-card">
                        <div class="highlight-icon">🏆</div>
                        <h3 class="highlight-title">Certification</h3>
                        <p class="highlight-desc">Industry-recognized certificate upon completion</p>
                    </div>
                    <div class="highlight-card">
                        <div class="highlight-icon">🤝</div>
                        <h3 class="highlight-title">Mentorship</h3>
                        <p class="highlight-desc">Direct access to expert digital marketers</p>
                    </div>
                    <div class="highlight-card">
                        <div class="highlight-icon">🔄</div>
                        <h3 class="highlight-title">Lifetime Access</h3>
                        <p class="highlight-desc">Access all materials and updates forever</p>
                    </div>
                    <div class="highlight-card">
                        <div class="highlight-icon">🌐</div>
                        <h3 class="highlight-title">Community</h3>
                        <p class="highlight-desc">Join 10,000+ digital marketers network</p>
                    </div>
                </div>

                <div class="curriculum-section">
                    <h2 class="section-title">Curriculum Overview</h2>
                    <ul class="curriculum-list">
                        <li class="curriculum-item">
                            <div class="curriculum-number">1</div>
                            <div class="curriculum-text">Digital Marketing Fundamentals & Strategy</div>
                        </li>
                        <li class="curriculum-item">
                            <div class="curriculum-number">2</div>
                            <div class="curriculum-text">SEO & Content Marketing Mastery</div>
                        </li>
                        <li class="curriculum-item">
                            <div class="curriculum-number">3</div>
                            <div class="curriculum-text">Social Media Marketing & Community Management</div>
                        </li>
                        <li class="curriculum-item">
                            <div class="curriculum-number">4</div>
                            <div class="curriculum-text">Google Ads & PPC Campaign Management</div>
                        </li>
                        <li class="curriculum-item">
                            <div class="curriculum-number">5</div>
                            <div class="curriculum-text">Facebook & Instagram Ads Advanced</div>
                        </li>
                        <li class="curriculum-item">
                            <div class="curriculum-number">6</div>
                            <div class="curriculum-text">Email Marketing & Marketing Automation</div>
                        </li>
                        <li class="curriculum-item">
                            <div class="curriculum-number">7</div>
                            <div class="curriculum-text">Analytics & Data-Driven Marketing</div>
                        </li>
                        <li class="curriculum-item">
                            <div class="curriculum-number">8</div>
                            <div class="curriculum-text">Conversion Rate Optimization (CRO)</div>
                        </li>
                    </ul>
                </div>

                <div class="instructor-section">
                    <div class="instructor-avatar">DM</div>
                    <div class="instructor-info">
                        <h3>Expert Digital Marketing Team</h3>
                        <p>Led by industry veterans with 10+ years experience at Google, Meta, and leading agencies. Our instructors have managed campaigns worth $50M+ and trained thousands of successful marketers.</p>
                    </div>
                </div>

                <br>

                <div class="pricing-section">
                    <div class="pricing-info">
                        <p class="pricing-label">Special Early Bird Price</p>
                        <div class="price-container">
                            <div class="current-price">Rp 650.000</div>
                            <div class="original-price">Rp 1.100.000</div>
                        </div>
                        <span class="discount-badge">Save 41%</span>
                    </div>
                    <div class="cta-container">
                        <div class="date-info">
                            <span class="date-icon">📅</span>
                            <span class="date-text">Starts: 05 January 2026</span>
                        </div>
                        <button class="btn-enroll" onclick="window.location.href='utama.php?page=payment'">
                            Enroll Now →
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function enrollNow() {
            alert('Redirecting to enrollment page...\n\nThank you for your interest in our Digital Marketing Bootcamp!');
        }
    </script>
</body>
</html>