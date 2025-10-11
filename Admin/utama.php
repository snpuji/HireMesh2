<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireMesh Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
<link rel="stylesheet" href="../css/Adashboard.css" />

</head>
<body>
    <div class="container">
        <!-- Sidebar - Fixed -->
<aside class="sidebar" id="sidebar">
    <div class="logo-section">
        <div class="logo"></div>
        <span class="logo-text">HireMesh</span>
        <span class="menu-icon" id="toggleSidebar">☰</span>
    </div>

    <?php
    $page = $_GET['page'] ?? 'dashboard';
    ?>

    <nav class="menu">
        <!-- Dashboard -->
        <a href="utama.php?page=dashboard" class="menu-item <?= $page == 'dashboard' ? 'active' : '' ?>">
            <svg viewBox="0 0 24 24" fill="currentColor">
                <rect x="3" y="3" width="7" height="7" rx="1"/>
                <rect x="14" y="3" width="7" height="7" rx="1"/>
                <rect x="3" y="14" width="7" height="7" rx="1"/>
                <rect x="14" y="14" width="7" height="7" rx="1"/>
            </svg>
            <span>Dashboard</span>
        </a>

        <!-- Jobs -->
        <a href="utama.php?page=jobs" class="menu-item <?= $page == 'jobs' ? 'active' : '' ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                <path d="M16 3h-8v4h8V3z"></path>
            </svg>
            <span>Jobs</span>
        </a>

        <!-- Category -->
        <a href="utama.php?page=jobcategory" class="menu-item <?= $page == 'jobcategory' ? 'active' : '' ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="6" cy="6" r="3"/>
                <circle cx="18" cy="6" r="3"/>
                <circle cx="6" cy="18" r="3"/>
                <circle cx="18" cy="18" r="3"/>
            </svg>
            <span>Category</span>
        </a>

        <!-- Companies -->
        <a href="utama.php?page=company" 
        class="menu-item <?= $page == 'company' ? 'active' : '' ?>">
        <img 
            src="../Images/building.png" 
            alt="Building Icon" 
            class="menu-icon-img"
            data-default="../Images/building.png"
            data-hover="../Images/building1.png"
            data-active="../Images/building2.png"
            width="22" height="22">
        <span>Companies</span>
        </a>

        <!-- Academy -->
        <a href="utama.php?page=academy" class="menu-item <?= $page == 'academy' ? 'active' : '' ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"> <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/> <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/> </svg>
            <span>Academy</span>
        </a>

        <!-- Workers -->
        <a href="utama.php?page=user" class="menu-item <?= $page == 'user' ? 'active' : '' ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                <circle cx="9" cy="7" r="4"/>
                <path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
            <span>Workers</span>
        </a>

        <!-- Revenue -->
        <a href="utama.php?page=revenue" class="menu-item <?= $page == 'revenue' ? 'active' : '' ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 3v18h18"/>
                <path d="M18 17V9M13 17V5M8 17v-3"/>
            </svg>
            <span>Revenue</span>
        </a>

        <!-- Message -->
        <a href="utama.php?page=message" class="menu-item <?= $page == 'message' ? 'active' : '' ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
            </svg>
            <span>Message</span>
        </a>
    </nav>
<!-- Logout Button -->
<button class="logout-btn" id="logoutBtn">Log out</button>

<!-- Logout Confirmation Popup -->
<div class="logout-modal" id="logoutModal">
  <div class="logout-modal-content">
    <h3>Are you sure you want to log out?</h3>
    <p>You will be signed out from your account.</p>
    <div class="logout-modal-actions">
      <button id="confirmLogout" class="confirm-btn">Yes</button>
      <button id="cancelLogout" class="cancel-btn">No</button>
    </div>
  </div>
</div>
<script>
  const logoutBtn = document.getElementById('logoutBtn');
  const logoutModal = document.getElementById('logoutModal');
  const confirmLogout = document.getElementById('confirmLogout');
  const cancelLogout = document.getElementById('cancelLogout');

  // Show modal when clicking "Log out"
  logoutBtn.addEventListener('click', () => {
    logoutModal.style.display = 'flex';
  });

  // Close modal when clicking "No"
  cancelLogout.addEventListener('click', () => {
    logoutModal.style.display = 'none';
  });

  // Redirect when clicking "Yes"
  confirmLogout.addEventListener('click', () => {
    window.location.href = '../Admin/';
  });

  // Close modal when clicking outside of it
  window.addEventListener('click', (e) => {
    if (e.target === logoutModal) {
      logoutModal.style.display = 'none';
    }
  });
</script>


</aside>
        <!-- Main Content -->
        <main class="main-content" id="mainContent">
            <!-- Top Navbar - Fixed -->
            <!-- Top Navbar - Fixed -->
<div class="top-navbar">
  <!-- Tombol Notifikasi -->
   <div class="search-box">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                    <input type="text" placeholder="Search" />
                </div>
  <button class="icon-btn notification" title="Notifications" id="notifBtn">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
      <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
    </svg>
  </button>

  <!-- Popup Notification -->
  <div class="notif-popup" id="notifPopup">
    <h4>Your Notification</h4>
    <div class="notif-empty">
      <i class="fa-regular fa-bell-slash"></i>
      <p>You don’t have any notification</p>
    </div>
  </div>

  <!-- Gambar Profil -->
  <a href="utama.php?page=profile">
    <img src="/HireMesh2/Images/puji.png" alt="Profile" class="profile-img" title="Profile">
  </a>
</div>

<!-- Script Notifikasi -->
<script>
  const notifBtn = document.getElementById('notifBtn');
  const notifPopup = document.getElementById('notifPopup');

  notifBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    notifPopup.classList.toggle('active');
  });

  // Klik di luar -> tutup popup
  document.addEventListener('click', (e) => {
    if (!notifPopup.contains(e.target) && !notifBtn.contains(e.target)) {
      notifPopup.classList.remove('active');
    }
  });
        const toggleBtn = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        });
</script>
<main>
    <?php 
        if (isset($_GET['page'])) {
            if ($_GET['page'] == 'index') {
                include "index.php";
            } elseif ($_GET['page'] == 'dashboard') {
                include "dashboard.php";
            } elseif ($_GET['page'] == 'seeall') {
                include "seeall.php";
            } elseif ($_GET['page'] == 'jobs') {
                include "jobs.php";
            } elseif ($_GET['page'] == 'addjob') {
                include "addjob.php";
            } elseif ($_GET['page'] == 'profile') {
                include "profile.php";
            } elseif ($_GET['page'] == 'editjob') {
                include "editjob.php";
            } elseif ($_GET['page'] == 'previewjob') {
                include "previewjob.php";
            } elseif ($_GET['page'] == 'jobcategory') {
                include "jobcategory.php";
            } elseif ($_GET['page'] == 'categoryadd') {
                include "categoryadd.php";
            } elseif ($_GET['page'] == 'categoryedit') {
                include "categoryedit.php";
            } elseif ($_GET['page'] == 'jobdetail') {
                include "jobdetail.php";
            } elseif ($_GET['page'] == 'company') {
                include "company.php";
            } elseif ($_GET['page'] == 'addcompany') {
                include "addcompany.php";
            } elseif ($_GET['page'] == 'editcompany') {
                include "editcompany.php";
            } elseif ($_GET['page'] == 'previewcompany') {
                include "previewcompany.php";
            } elseif ($_GET['page'] == 'academy') {
                include "academy.php";
            } elseif ($_GET['page'] == 'addacademy') {
                include "addacademy.php";
            } elseif ($_GET['page'] == 'addcourse') {
                include "addcourse.php";
            } elseif ($_GET['page'] == 'editacademy') {
                include "editacademy.php";
            } elseif ($_GET['page'] == 'previewacademy') {
                include "previewacademy.php";
            } else {
                echo "<p>Page not found.</p>";
            }
        } else {
            include "home.php"; // default content
        }
    ?>
</main>
<!-- ================= END CONTENT ================= -->



