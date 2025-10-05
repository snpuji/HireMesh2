
    
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