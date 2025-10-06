<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireMesh - Turn Your Skills Into Opportunities</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <nav class="navbar">
        <div class="navbar-left">
            <div class="logo"></div>
            <div class="nav-links nav-links-desktop">
                <a href="utama.php?page=home" class="nav-link <?= ($_GET['page'] ?? 'home') == 'home' ? 'active' : '' ?>" data-page="home">Home</a>
                <a href="utama.php?page=findjob" class="nav-link <?= ($_GET['page'] ?? 'home') == 'findjob' ? 'active' : '' ?>" data-page="jobs">Find Jobs</a>
                <a href="utama.php?page=companies" class="nav-link <?= ($_GET['page'] ?? 'home') == 'companies' ? 'active' : '' ?>" data-page="companies">Companies</a>
                <a href="utama.php?page=academy" class="nav-link <?= ($_GET['page'] ?? 'home') == 'academy' ? 'active' : '' ?>" data-page="academy">Academy</a>
            </div>
        </div>

        <button class="hamburger" id="hamburger">&#9776;</button>

        <div class="navbar-right" id="navMenu">
            <div class="nav-links nav-links-mobile">
                <a href="utama.php?page=home" class="nav-link <?= ($_GET['page'] ?? 'home') == 'home' ? 'active' : '' ?>" data-page="home">Home</a>
                <a href="utama.php?page=findjob" class="nav-link <?= ($_GET['page'] ?? 'home') == 'findjob' ? 'active' : '' ?>" data-page="jobs">Find Jobs</a>
                <a href="utama.php?page=companies" class="nav-link <?= ($_GET['page'] ?? 'home') == 'companies' ? 'active' : '' ?>" data-page="companies">Companies</a>
                <a href="utama.php?page=academy" class="nav-link <?= ($_GET['page'] ?? 'home') == 'academy' ? 'active' : '' ?>" data-page="academy">Academy</a>
            </div>

            <div class="search-box">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                <input type="text" placeholder="Search" />
            </div>

            <div class="icon-group">
                <button class="icon-btn message" title="Messages">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                </button>

                <button class="icon-btn notification" title="Notifications">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                    </svg>
                </button>

                <a href="utama.php?page=profile">
                    <img src="/HireMesh2/Images/puji.png" alt="Profile" class="profile-img" title="Profile">
                </a>
            </div>
        </div>
    </nav>
<script>
const hamburger = document.getElementById("hamburger");
const navMenu = document.getElementById("navMenu");

hamburger.addEventListener("click", (e) => {
    navMenu.classList.toggle("active");
    e.stopPropagation();
});

document.addEventListener("click", (e) => {
    if (!navMenu.contains(e.target) && !hamburger.contains(e.target)) {
        navMenu.classList.remove("active");
    }
});
</script>
</body>
</html>
<!-- ================= END HEADER ================= -->


<!-- ================= CONTENT ================= -->
<main>
    <?php 
        if (isset($_GET['page'])) {
            if ($_GET['page'] == 'index') {
                include "index.php";
            } elseif ($_GET['page'] == 'companies') {
                include "companies.php";
            } elseif ($_GET['page'] == 'academy') {
                include "academy.php";
            } elseif ($_GET['page'] == 'home') {
                include "home.php";
            } elseif ($_GET['page'] == 'findjob') {
                include "findjob.php";
            } elseif ($_GET['page'] == 'profile') {
                include "profile.php";
            } elseif ($_GET['page'] == 'editprofile') {
                include "editprofile.php";
            } else {
                echo "<p>Page not found.</p>";
            }
        } else {
            include "home.php"; // default content
        }
    ?>
</main>
<!-- ================= END CONTENT ================= -->


<!-- ================= FOOTER ================= -->

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