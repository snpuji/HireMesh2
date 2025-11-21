<?php
// WAJIB: Mulai session dan panggil DB di baris PALING ATAS
session_start();
require 'db.php'; // $pdo sekarang ada di semua halaman

// $currentUser = null;
$userProfilePic = 'https://via.placeholder.com/40/EBF4FA/808080?text=NP'; // NP = No Photo (Placeholder)

if (isset($_SESSION['user_id'])) {
    try {
        $stmt = $pdo->prepare("SELECT name, profile_picture FROM users WHERE id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        $currentUser = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($currentUser && !empty($currentUser['profile_picture']) && file_exists($currentUser['profile_picture'])) {
            // Jika user punya foto DAN filenya ada, gunakan itu
            $userProfilePic = $currentUser['profile_picture'];
        }
    } catch (PDOException $e) {
        // Biarkan saja, $currentUser akan null dan placeholder akan digunakan
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireMesh - Turn Your Skills Into Opportunities</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/editprofile.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Style khusus untuk Tombol Posting Job di Navbar */
        .btn-post-job {
            background-color: var(--primary, #007AFF); /* Biru sesuai styleguide */
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            height: 40px; /* Samakan tinggi dengan icon lain */
        }

        .btn-post-job:hover {
            background-color: #005ec4;
        }

        @media (max-width: 768px) {
            .btn-post-job span {
                display: none; /* Sembunyikan teks di mobile */
            }
        }
    </style>
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

            <a href="utama.php?page=findjob" 
            class="icon-btn" 
            title="Search"
            style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; text-decoration: none; color: inherit;">
                <svg width="22" height="22" viewBox="0 0 16 16" fill="currentColor">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </a>

            <div class="icon-group" style="display: flex; align-items: center; gap: 10px;">
                
                <button id="btnOpenPostJob" class="btn-post-job">
                    <i class="fa-solid fa-plus"></i> <span>Posting Job</span>
                </button>
                <a href="utama.php?page=message" class="icon-btn" title="Messages" 
                   style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; text-decoration: none; color: inherit;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                </a>

                <button class="icon-btn notification" title="Notifications" id="notifBtn" 
                        style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: none; border: none; padding: 0; cursor: pointer; color: inherit;">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                  </svg>
                </button>

                <div class="notif-popup" id="notifPopup">
                  <h4>Your Notification</h4>
                  <div class="notif-empty">
                    <i class="fa-regular fa-bell-slash"></i>
                    <p>You don’t have any notification</p>
                  </div>
                </div>

                <?php if (isset($_SESSION['user_id'])) : ?>
                    <a href="utama.php?page=profile" style="display: flex; align-items: center;">
                        <img src="<?php echo htmlspecialchars($userProfilePic); ?>" 
                             alt="<?php echo htmlspecialchars($currentUser['name'] ?? 'Profile'); ?>" 
                             class="profile-img" 
                             title="<?php echo htmlspecialchars($currentUser['name'] ?? 'Profile'); ?>">
                    </a>
                <?php else : ?>
                    <a href="login.php" class="btn-login">Login</a> <?php endif; ?>
                </div>
        </div>
    </nav>
<script>
// Script untuk Notifikasi
const notifBtn = document.getElementById('notifBtn');
const notifPopup = document.getElementById('notifPopup');
if (notifBtn) {
    notifBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        notifPopup.classList.toggle('active');
    });
}
document.addEventListener('click', (e) => {
    if (notifPopup && !notifPopup.contains(e.target) && !notifBtn.contains(e.target)) {
        notifPopup.classList.remove('active');
    }
});

// Script untuk Hamburger
const hamburger = document.getElementById("hamburger");
const navMenu = document.getElementById("navMenu");
if (hamburger) {
    hamburger.addEventListener("click", (e) => {
        navMenu.classList.toggle("active");
        e.stopPropagation();
    });
}
document.addEventListener("click", (e) => {
    if (navMenu && !navMenu.contains(e.target) && !hamburger.contains(e.target)) {
        navMenu.classList.remove("active");
    }
});
</script>
<main>
    <?php 
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            // Daftar halaman yang diizinkan
            $allowed_pages = [
                'index', 'companies', 'academy', 'home', 'findjob', 
                'profile', 'editprofile', 'message', 'course', 
                'companyprofile', 'hiremesh', 'jobdetail', 'payment', 
                'hiremeshcourse'
            ];
            
            if (in_array($page, $allowed_pages) && file_exists($page . ".php")) {
                include $page . ".php";
            } else {
                echo "<p>Page not found.</p>";
            }

        } else {
            include "home.php";
        }
    ?>
</main>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-brand">
            <div class="brand-logo">
                <img src="/HireMesh2/Images/HireMeshHorizontal.png" alt="HireMesh Logo" style="max-height: 40px;">
            </div>
        </div>
        <div class="footer-columns">
             <div class="footer-column">
                <h3>Services</h3>
                <ul class="footer-links">
                    <li><a href="#">Find Jobs</a></li>
                    <li><a href="#">Companies</a></li>
                </ul>
            </div>
             <div class="footer-column">
                <h3>Contact</h3>
                 <ul class="footer-links">
                    <li>Hello@hiremesh.com</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p class="copyright">&copy; 2025 HireMesh. All rights reserved.</p>
    </div>
</footer>

<script>
// Active navigation script (tetap ada)
document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('.nav-item');
    const sections = document.querySelectorAll('.form-section');
    if (navItems.length > 0 && sections.length > 0) {
        // Logic scroll spy jika diperlukan
    }
});
</script>

<?php include 'modal_post_job.php'; ?>

</body>
</html>