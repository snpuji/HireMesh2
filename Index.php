<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireMesh - Turn Your Skills Into Opportunities</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css" />
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
    <div class="navbar-left">
        <div class="logo"></div>
        <!-- Nav links desktop -->
        <div class="nav-links nav-links-desktop">
            <a href="#" class="active">Home</a>
            <a href="#">Find Jobs</a>
            <a href="#">Companies</a>
            <a href="#">Academy</a>
        </div>
    </div>

    <!-- Hamburger button -->
    <button class="hamburger" id="hamburger">&#9776;</button>

    <!-- Navbar-right untuk mobile/tablet -->
        <div class="navbar-right" id="navMenu">
            <div class="nav-links nav-links-mobile">
                <a href="#home" class="nav-link active" data-page="home">Home</a>
                <a href="#jobs" class="nav-link" data-page="jobs">Find Jobs</a>
                <a href="#companies" class="nav-link" data-page="companies">Companies</a>
                <a href="#academy" class="nav-link" data-page="academy">Academy</a>
            </div>
            <div class="search-box">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                <input type="text" placeholder="Search..." />
            </div>
            <a href="choices.php" class="btn-signup">Sign Up</a>
            <a href="login.php" class="btn-login">Log In</a>
        </div>
    </nav>

    <script>
        const hamburger = document.getElementById("hamburger");
        const navMenu = document.getElementById("navMenu");
        const navLinks = document.querySelectorAll(".nav-link");

        // Toggle menu saat klik hamburger
        hamburger.addEventListener("click", (e) => {
            navMenu.classList.toggle("active");
            e.stopPropagation();
        });

        // Tutup menu saat klik di luar
        document.addEventListener("click", (e) => {
            if (!navMenu.contains(e.target) && !hamburger.contains(e.target)) {
                navMenu.classList.remove("active");
            }
        });

        // Handle nav link clicks - update active state
        navLinks.forEach(link => {
            link.addEventListener("click", (e) => {
                e.preventDefault(); // Prevent default anchor behavior
                
                // Remove active class from all links
                navLinks.forEach(l => l.classList.remove("active"));
                
                // Add active class to clicked link and its counterpart
                const page = link.getAttribute("data-page");
                document.querySelectorAll(`[data-page="${page}"]`).forEach(l => {
                    l.classList.add("active");
                });
                
                // Close mobile menu if open
                navMenu.classList.remove("active");
                
                // Optional: Scroll to section or load content
                // You can add your page navigation logic here
                console.log(`Navigated to: ${page}`);
            });
        });
    </script>
    
    <!-- Main Content -->
    <div class="frame">
        <!-- Decorative Elements -->
        <div class="div"></div>
        <div class="div2"></div>
        <!-- Top Left Testimonial -->
        <div class="testimonial-card-top-left">
            <div class="image"></div>
            <div class="testimonial-content">
                <div class="testimonial-name">CleverTop</div>
                <div class="testimonial-role">James, Founder</div>
                <div class="testimonial-text">"HireMesh gives us access to skilled people worldwide without the usual hassle."</div>
            </div>
            <div class="pin-icon">
                <svg viewBox="0 0 24 24" fill="#085DC5">
                    <path d="M16 12V4h1c.55 0 1-.45 1-1s-.45-1-1-1H7c-.55 0-1 .45-1 1s.45 1 1 1h1v8l-2 2v2h5v6l1 1 1-1v-6h5v-2l-2-2z"/>
                </svg>
            </div>
        </div>

        <!-- Top Right Testimonial -->
        <div class="testimonial-card-top-right">
            <div class="image"></div>
            <div class="testimonial-content">
                <div class="testimonial-name">GaoTek Inc.</div>
                <div class="testimonial-role">Marta, HR Manager</div>
                <div class="testimonial-text">"We found the right talent in days, not weeks. The process is smooth and fast."</div>
            </div>
            <div class="pin-icon">
                <svg viewBox="0 0 24 24" fill="#085DC5">
                    <path d="M16 12V4h1c.55 0 1-.45 1-1s-.45-1-1-1H7c-.55 0-1 .45-1 1s.45 1 1 1h1v8l-2 2v2h5v6l1 1 1-1v-6h5v-2l-2-2z"/>
                </svg>
            </div>
        </div>

        <!-- Hero Section -->
        <div class="hero-section">
            <h1 class="hero-title">Turn Your Skills<br>Into Opportunities</h1>
            <p class="hero-subtitle">HireMesh helps talents access global remote jobs and prepare for international careers through diverse skill programs.</p>
            <div class="cta-buttons">
                <!-- Find Remote Jobs -->
                <a href="signup.php" class="btn-primary">Find Remote Jobs</a>

                <!-- Find Talent -->
                <button class="btn-secondary" onclick="openTalentPopup()">Find Talent</button>
            <!-- Popup Modal for Talent -->
                <div id="talentPopup" class="popup-overlay">
                    <div class="popup-content">
                        <!-- Icon Coming Soon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <h2>Coming Soon</h2>
                        <p>
                            The Talent feature is still under development.<br>
                            For now, companies looking for Indonesian talents can contact our admin at 
                            <b>srinuryanipujiastuti@gmail.com</b>.<br><br>
                            <em>Notes: Posting is FREE during this early phase—don’t miss out!</em>
                        </p>

                        <button class="close-btn" onclick="closeTalentPopup()">Close</button>
                    </div>
                </div>
                <script>
                    function openTalentPopup() {
                        document.getElementById("talentPopup").style.display = "flex";
                    }
                    function closeTalentPopup() {
                        document.getElementById("talentPopup").style.display = "none";
                    }
                </script>

            </div>
        </div>
                
        <!-- Bottom Left Testimonial Bubble -->
        <div class="testimonial-bubble-left">
            <div class="bubble-content-left">
                <div class="bubble-avatar"></div>
                <div class="bubble-text-wrapper">
                    <div class="bubble-text">"It's easier to connect with global clients. My profile feels more professional."</div>
                    <div class="bubble-name">-Jose, Mobile Dev</div>
                </div>
            </div>
        </div>

        <!-- Bottom Right Testimonial Bubble -->
        <div class="testimonial-bubble-right">
            <div class="bubble-content-right">
                <div class="bubble-avatar2">
                </div>
                <div class="bubble-text-wrapper">
                    <div class="bubble-text">"HireMesh helped me showcase my work. I landed 2 projects in just a week."</div>
                    <div class="bubble-name">-Puji, UI/UX Designer</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest Jobs Section -->
    <section class="latest-jobs-section">
        <div class="jobs-header">
            <div class="jobs-header-left">
                <svg class="jobs-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                </svg>
                <div class="jobs-title-wrapper">
                    <h4 class="job-title2">Latest Jobs</h4>
                    <p>The newest job listings tailored for creators, designers, and developers.</p>
                </div>
            </div>
            <button class="browse-jobs-btn">
                Browse Jobs
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </button>
        </div>

        <div class="job-list">
            <!-- Job Card 1 -->
            <div class="job-card">
                <div class="job-card-left">
                    <div class="job-time">5 hour ago</div>
                    <div class="company-logo" style=" 
                        background-image: url('/Hiremesh2/Images/gt.png');
                        background-size: cover;
                        background-position: center;
                        width: 80px; /* sesuaikan ukuran */
                        height: 80px; /* sesuaikan ukuran */
                    ">
                        <span style="font-size: 24px;"></span>
                    </div>
                    <div class="job-info">
                        <div class="company-name-wrapper">
                            <span class="company-name">TenTwenty</span>
                            
                        </div>
                        <div class="job-title">UI/UX Designer</div>
                        <div class="job-tags">
                            <span class="job-tag">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                Easy apply
                            </span>
                            <span class="job-tag">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <circle cx="12" cy="12" r="10"/>
                                </svg>
                                Remote
                            </span>
                            <span class="job-tag">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/>
                                </svg>
                                Indonesian Only
                            </span>
                            <span class="job-tag">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <circle cx="12" cy="12" r="10"/>
                                </svg>
                                Internship
                            </span>
                        </div>
                    </div>
                </div>
                <div class="job-card-right">
                    <div class="job-salary">$50k-$80k</div>
                    <button class="bookmark-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                    </svg>
                    </button>
                </div>
            </div>
            <script>
                document.querySelectorAll('.bookmark-btn').forEach(btn => {
                    btn.addEventListener('click', () => {
                    btn.classList.toggle('active');
                    });
                });
                </script>
        </div>
    </section>
    <!-- Platform Section -->
    <section class="platform-section">
        <div class="platform-header">
            <h2>One Platform for Careers & Recruitment</h2>
            <p>Create your professional profile, access global remote opportunities,<br>and boost your skills with the Academy to grow your career.</p>
        </div>

        <div class="platform-content">
            <!-- For Job Seekers Card -->
            <div class="platform-card">
                <div class="card-content-wrapper">
                    <div class="card-text-content">
                        <h3>For Job Seekers</h3>
                        <p class="recruitment-text">Discover global remote opportunities, enhance your skills with our Academy, and get ready for the next step in your career journey.</p>
                        <ul class="platform-features">
                            <li>Global remote job listings</li>
                            <li>Academy for upskilling and career preparation</li>
                            <li>Support for international career readiness</li>
                        </ul>
                        <button class="btn-primary">Start Your Career</button>
                    </div>
                    <div class="card-illustration">
                        <div class="job-seeker-illustration">
                            <div class="color-accent-1"></div>
                            <div class="color-accent-2"></div>
                            <div class="chart-window">
                                <div class="window-header">
                                    <div class="window-dot"></div>
                                    <div class="window-dot"></div>
                                    <div class="window-dot"></div>
                                </div>
                                <div class="chart-content">
                                    <div class="chart-bar bar-blue"></div>
                                    <div class="chart-bar bar-purple"></div>
                                    <div class="chart-bar bar-green"></div>
                                </div>
                            </div>
                            <div class="floating-button"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For HR & Companies Card -->
            <div class="platform-card">
                <div class="card-content-wrapper">
                    <div class="card-illustration">
                        <div class="hr-illustration">
                            <div class="phone-mockup">
                                <div class="profile-cards">
                                    <div class="profile-card">
                                        <div class="profile-avatar">👤</div>
                                        <div class="profile-info">
                                            <div class="profile-name"></div>
                                            <div class="profile-skill"></div>
                                        </div>
                                    </div>
                                    <div class="profile-card" style="opacity: 0.8;">
                                        <div class="profile-avatar">👤</div>
                                        <div class="profile-info">
                                            <div class="profile-name"></div>
                                            <div class="profile-skill"></div>
                                        </div>
                                    </div>
                                    <div class="profile-card" style="opacity: 0.6;">
                                        <div class="profile-avatar">👤</div>
                                        <div class="profile-info">
                                            <div class="profile-name"></div>
                                            <div class="profile-skill"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="folder-icon"></div>
                            <div class="checkmark-badge"></div>
                        </div>
                    </div>
                    <div class="card-text-content">
                        <h3>For HR & Companies</h3>
                        <p class="recruitment-text">
                        Hire smarter and faster with access to a pool of qualified candidates. 
                        Simplify recruitment with our modern AI-powered tools.
                        </p>
                        <ul class="platform-features">
                            <li>Advanced candidate filtering</li>
                            <li>Automated screening process</li>
                            <li>Team collaboration tools</li>
                        </ul>
                        <button class="btn-primary">Find Talent</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Company Logos Section -->
    <div class="company-section">
        <h2 class="company-title">Global Company Grow With HireMesh</h2>
        <div class="logo-slider">
            <div class="logo-track">
                <!-- First Group -->
                <div class="logo-group">
                    <div class="logo-item">
                        <svg width="120" height="40" viewBox="0 0 120 40">
                            <text x="10" y="28" font-family="Poppins" font-weight="700" font-size="24" fill="#00AA13">Gojek</text>
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="140" height="40" viewBox="0 0 140 40">
                            <text x="10" y="28" font-family="Monaco" font-weight="600" font-size="20" fill="#4B7BEC">&lt;codecademy/&gt;</text>
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="130" height="40" viewBox="0 0 130 40">
                            <text x="10" y="28" font-family="Poppins" font-weight="700" font-size="24" fill="#FF9900">amazon</text>
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="120" height="40" viewBox="0 0 120 40">
                            <circle cx="20" cy="20" r="15" fill="#24292e"/>
                            <text x="42" y="28" font-family="Poppins" font-weight="600" font-size="22" fill="#24292e">GitHub</text>
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="130" height="40" viewBox="0 0 130 40">
                            <text x="10" y="28" font-family="Poppins" font-weight="600" font-size="22">
                                <tspan fill="#4285F4">G</tspan>
                                <tspan fill="#EA4335">o</tspan>
                                <tspan fill="#FBBC04">o</tspan>
                                <tspan fill="#4285F4">g</tspan>
                                <tspan fill="#34A853">l</tspan>
                                <tspan fill="#EA4335">e</tspan>
                            </text>
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="140" height="40" viewBox="0 0 140 40">
                            <circle cx="20" cy="20" r="15" fill="#1DB954"/>
                            <text x="42" y="28" font-family="Poppins" font-weight="700" font-size="22" fill="#1DB954">Spotify</text>
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="120" height="40" viewBox="0 0 120 40">
                            <text x="10" y="28" font-family="Poppins" font-weight="700" font-size="24" fill="#00C4CC">Canva</text>
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="120" height="40" viewBox="0 0 120 40">
                            <text x="10" y="28" font-family="Poppins" font-weight="700" font-size="24" fill="#611f69">Slack</text>
                        </svg>
                    </div>
                </div>
                <!-- Duplicate Group for Seamless Loop -->
                <div class="logo-group">
                    <div class="logo-item">
                        <svg width="120" height="40" viewBox="0 0 120 40">
                            <text x="10" y="28" font-family="Poppins" font-weight="700" font-size="24" fill="#00AA13">Gojek</text>
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="140" height="40" viewBox="0 0 140 40">
                            <text x="10" y="28" font-family="Monaco" font-weight="600" font-size="20" fill="#4B7BEC">&lt;codecademy/&gt;</text>
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="130" height="40" viewBox="0 0 130 40">
                            <text x="10" y="28" font-family="Poppins" font-weight="700" font-size="24" fill="#FF9900">amazon</text>
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="120" height="40" viewBox="0 0 120 40">
                            <circle cx="20" cy="20" r="15" fill="#24292e"/>
                            <text x="42" y="28" font-family="Poppins" font-weight="600" font-size="22" fill="#24292e">GitHub</text>
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="130" height="40" viewBox="0 0 130 40">
                            <text x="10" y="28" font-family="Poppins" font-weight="600" font-size="22">
                                <tspan fill="#4285F4">G</tspan>
                                <tspan fill="#EA4335">o</tspan>
                                <tspan fill="#FBBC04">o</tspan>
                                <tspan fill="#4285F4">g</tspan>
                                <tspan fill="#34A853">l</tspan>
                                <tspan fill="#EA4335">e</tspan>
                            </text>
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="140" height="40" viewBox="0 0 140 40">
                            <circle cx="20" cy="20" r="15" fill="#1DB954"/>
                            <text x="42" y="28" font-family="Poppins" font-weight="700" font-size="22" fill="#1DB954">Spotify</text>
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="120" height="40" viewBox="0 0 120 40">
                            <text x="10" y="28" font-family="Poppins" font-weight="700" font-size="24" fill="#00C4CC">Canva</text>
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="120" height="40" viewBox="0 0 120 40">
                            <text x="10" y="28" font-family="Poppins" font-weight="700" font-size="24" fill="#611f69">Slack</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="testimonial-section">
        <h2 class="testimonial-title">A Word From Our Customers</h2>
        <div class="review-slider">
            <div class="review-track">
                <!-- First Group -->
                <div class="review-group">
                    <div class="review-box">
                        <div class="review-header">
                            <div class="review-avatar avatar-1"></div>
                            <div class="review-info">
                                <h3>Anna Williams</h3>
                                <p>HR Manager</p>
                            </div>
                        </div>
                        <div class="review-text">
                            "Recruitment is now faster and easier. The candidate filtering tools save me so much time!"
                        </div>
                        <div class="review-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="rating-text">(5.0)</span>
                        </div>
                    </div>

                    <div class="review-box">
                        <div class="review-header">
                            <div class="review-avatar avatar-2"></div>
                            <div class="review-info">
                                <h3>Sarah Johnson</h3>
                                <p>UI/UX Designer</p>
                            </div>
                        </div>
                        <div class="review-text">
                            "This platform helped me land a remote job in less than a week. The process was smooth and professional."
                        </div>
                        <div class="review-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="rating-text">(5.0)</span>
                        </div>
                    </div>

                    <div class="review-box">
                        <div class="review-header">
                            <div class="review-avatar avatar-3"></div>
                            <div class="review-info">
                                <h3>Michael Chen</h3>
                                <p>Software Engineer</p>
                            </div>
                        </div>
                        <div class="review-text">
                            "HireMesh connected me with amazing opportunities. The quality of jobs posted here is exceptional."
                        </div>
                        <div class="review-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="rating-text">(5.0)</span>
                        </div>
                    </div>

                    <div class="review-box">
                        <div class="review-header">
                            <div class="review-avatar avatar-4"></div>
                            <div class="review-info">
                                <h3>Emma Davis</h3>
                                <p>Product Manager</p>
                            </div>
                        </div>
                        <div class="review-text">
                            "Finding talent has never been easier. HireMesh streamlined our entire hiring process significantly."
                        </div>
                        <div class="review-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="rating-text">(5.0)</span>
                        </div>
                    </div>
                </div>
                <!-- Duplicate Group for Seamless Loop -->
                <div class="review-group">
                    <div class="review-box">
                        <div class="review-header">
                            <div class="review-avatar avatar-1"></div>
                            <div class="review-info">
                                <h3>Anna Williams</h3>
                                <p>HR Manager</p>
                            </div>
                        </div>
                        <div class="review-text">
                            "Recruitment is now faster and easier. The candidate filtering tools save me so much time!"
                        </div>
                        <div class="review-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="rating-text">(5.0)</span>
                        </div>
                    </div>

                    <div class="review-box">
                        <div class="review-header">
                            <div class="review-avatar avatar-2"></div>
                            <div class="review-info">
                                <h3>Sarah Johnson</h3>
                                <p>UI/UX Designer</p>
                            </div>
                        </div>
                        <div class="review-text">
                            "This platform helped me land a remote job in less than a week. The process was smooth and professional."
                        </div>
                        <div class="review-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="rating-text">(5.0)</span>
                        </div>
                    </div>

                    <div class="review-box">
                        <div class="review-header">
                            <div class="review-avatar avatar-3"></div>
                            <div class="review-info">
                                <h3>Michael Chen</h3>
                                <p>Software Engineer</p>
                            </div>
                        </div>
                        <div class="review-text">
                            "HireMesh connected me with amazing opportunities. The quality of jobs posted here is exceptional."
                        </div>
                        <div class="review-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="rating-text">(5.0)</span>
                        </div>
                    </div>

                    <div class="review-box">
                        <div class="review-header">
                            <div class="review-avatar avatar-4"></div>
                            <div class="review-info">
                                <h3>Emma Davis</h3>
                                <p>Product Manager</p>
                            </div>
                        </div>
                        <div class="review-text">
                            "Finding talent has never been easier. HireMesh streamlined our entire hiring process significantly."
                        </div>
                        <div class="review-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="rating-text">(5.0)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <!-- Brand Section - Centered at Top -->
            <div class="footer-brand">
                <div class="brand-logo">
                    <div class="logo-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 2L2 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-10-5z"/>
                        </svg>
                    </div>
                    <span class="brand-name">HireMesh</span>
                </div>
            </div>

            <!-- 5 Columns Below Logo -->
            <div class="footer-columns">
                <!-- About Company -->
                <div class="footer-column">
                    <h3>About Company</h3>
                    <ul class="footer-links">
                        <li><a href="#about">About Company</a></li>
                        <li><a href="#careers">Careers at HireMesh</a></li>
                        <li><a href="#blog">Blog/Articles</a></li>
                        <li><a href="#press">Press & Media Kit</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="footer-column">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="#jobs">Find Jobs</a></li>
                        <li><a href="#companies">Companies</a></li>
                        <li><a href="#academy">Academy</a></li>
                    </ul>
                </div>

                <!-- Help -->
                <div class="footer-column">
                    <h3>Help</h3>
                    <ul class="footer-links">
                        <li><a href="#faq">Help Center (FAQ)</a></li>
                        <li><a href="#guide">User Guide</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                        <li><a href="#terms">Terms & Conditions</a></li>
                        <li><a href="#privacy">Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- Follow Us -->
                <div class="footer-column">
                    <h3>Follow Us</h3>
                    <div class="social-links">
                        <a href="#linkedin" class="social-link">
                            <span class="social-icon linkedin-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
                                </svg>
                            </span>
                            LinkedIn
                        </a>
                        <a href="#instagram" class="social-link">
                            <span class="social-icon instagram-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z"/>
                                </svg>
                            </span>
                            Instagram
                        </a>
                        <a href="#facebook" class="social-link">
                            <span class="social-icon facebook-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z"/>
                                </svg>
                            </span>
                            Facebook
                        </a>
                        <a href="#youtube" class="social-link">
                            <span class="social-icon youtube-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M10 15l5.19-3L10 9v6m11.56-7.83c.13.47.22 1.1.28 1.9.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83-.25.9-.83 1.48-1.73 1.73-.47.13-1.33.22-2.65.28-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44-.9-.25-1.48-.83-1.73-1.73-.13-.47-.22-1.1-.28-1.9-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83.25-.9.83-1.48 1.73-1.73.47-.13 1.33-.22 2.65-.28 1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44.9.25 1.48.83 1.73 1.73z"/>
                                </svg>
                            </span>
                            Youtube
                        </a>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="footer-column">
                    <h3>Contact Info</h3>
                    <div class="contact-info">
                        <div class="contact-item">
                            <svg class="contact-icon" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                            <span>Bandung, Indonesia</span>
                        </div>
                        <div class="contact-item">
                            <svg class="contact-icon" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                            <span>+62 21 1234 5678</span>
                        </div>
                        <div class="contact-item">
                            <svg class="contact-icon" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                            <span>Hello@hiremesh.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="copyright">&copy; 2025 HireMesh. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>