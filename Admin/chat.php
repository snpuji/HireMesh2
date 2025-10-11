<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireMesh Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
<link rel="stylesheet" href="../css/Adashboard.css" />
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
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', Helvetica, sans-serif;
            background-color: var(--bg);
            height: 100vh;
            overflow: hidden;
        }

        .container1 {
            display: flex;
            height: 100vh;
        }
        
        /* Sidebar Styles */
        .sidebar {
            width: 330px; /* Lebar default */
            transition: width 0.3s ease;
            /* Added position and z-index for better layering if needed */
            position: fixed; 
            height: 100vh;
            top: 0;
            left: 0;
            z-index: 1000;
            /* Assume background color is set in Adashboard.css or elsewhere */
        }

        .sidebar.collapsed {
            width: 70px; /* Lebar saat dikolaps */
        }

        .sidebar .menu span {
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .sidebar.collapsed .menu span {
            opacity: 0;
            pointer-events: none;
        }

        .logo-text {
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .sidebar.collapsed .logo-text {
            opacity: 0;
        }

        /* Main Content - Chat Area */
        /* Default posisi ketika sidebar lebar normal */
        .main-content {
            flex: 1;
            /* Set initial margin-left to match default sidebar width */
            margin-left: 330px; 
            transition: margin-left 0.3s ease;
            background-color: var(--card);
            display: flex;
            flex-direction: column;
            /* To ensure it takes the remaining width */
            width: calc(100% - 330px); 
        }

        /* Ketika sidebar dikolaps */
        .sidebar.collapsed ~ .main-content {
            /* Adjust margin-left to collapsed sidebar width */
            margin-left: 70px; 
            /* Adjust width accordingly */
            width: calc(100% - 70px); 
        }

        .chat-header {
            background-color: var(--card);
            padding: 20px 24px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .back-button {
            width: 40px;
            height: 40px;
            border: none;
            background: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: var(--text-1);
            transition: background-color 0.2s;
            border-radius: 8px;
        }

        .back-button:hover {
            background-color: var(--hoverbiru);
        }

        .avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 2px solid var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: 600;
            color: var(--primary);
            background-color: var(--card);
            flex-shrink: 0;
        }

        .user-info {
            flex: 1;
        }

        .user-name {
            font-size: 18px;
            font-weight: 600;
            color: var(--text-1);
            margin-bottom: 2px;
        }

        .user-status {
            font-size: 14px;
            font-weight: 400;
            color: var(--text-2);
        }

        .chat-container {
            flex: 1;
            overflow-y: auto;
            padding: 24px;
            display: flex;
            flex-direction: column;
            gap: 16px;
            background-color: var(--bg);
        }

        .message-group {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .message-timestamp {
            text-align: center;
            font-size: 14px;
            color: var(--text-2);
            margin: 16px 0 8px 0;
        }

        .message {
            max-width: 65%;
            padding: 14px 18px;
            border-radius: 16px;
            font-size: 16px;
            line-height: 1.5;
            position: relative;
            word-wrap: break-word;
        }

        .message-left {
            align-self: flex-start;
            background-color: rgba(232, 232, 237, 1);
            color: var(--text-1);
            border-bottom-left-radius: 4px;
        }

        .message-right {
            align-self: flex-end;
            background-color: var(--primary);
            color: white;
            border-bottom-right-radius: 4px;
        }

        .message-time {
            font-size: 12px;
            margin-top: 6px;
            opacity: 0.7;
        }

        .message-left .message-time {
            text-align: left;
            color: var(--text-2);
        }

        .message-right .message-time {
            text-align: right;
            color: white;
        }

        .chat-input-container {
            background-color: var(--card);
            padding: 20px 24px;
            border-top: 1px solid var(--border);
        }

        .chat-input-wrapper {
            display: flex;
            align-items: center;
            gap: 12px;
            background-color: var(--bg);
            border-radius: 24px;
            padding: 12px 20px;
            border: 1px solid var(--border);
            transition: border-color 0.2s;
        }

        .chat-input-wrapper:focus-within {
            border-color: var(--primary);
        }

        .chat-input {
            flex: 1;
            border: none;
            background: none;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            color: var(--text-1);
            outline: none;
        }

        .chat-input::placeholder {
            color: var(--text-2);
            opacity: 0.7;
        }

        .send-button {
            width: 36px;
            height: 36px;
            border: none;
            background: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.2s;
            flex-shrink: 0;
        }

        .send-button:hover {
            transform: scale(1.1);
        }

        .send-button svg {
            width: 24px;
            height: 24px;
            fill: var(--primary);
        }
    </style>
</head>
<body>
    <div class="container1">
        <aside class="sidebar" id="sidebar">
    <div class="logo-section">
        <div class="logo"></div>
        <span class="logo-text">HireMesh</span>
        <span class="menu-icon" id="toggleSidebar">☰</span>
    </div>

   <?php
$page = ''; // biar semua menu sidebar nonaktif
?>


    <nav class="menu">
        <a href="utama.php?page=dashboard" class="menu-item <?= $page == 'dashboard' ? 'active' : '' ?>">
            <svg viewBox="0 0 24 24" fill="currentColor">
                <rect x="3" y="3" width="7" height="7" rx="1"/>
                <rect x="14" y="3" width="7" height="7" rx="1"/>
                <rect x="3" y="14" width="7" height="7" rx="1"/>
                <rect x="14" y="14" width="7" height="7" rx="1"/>
            </svg>
            <span>Dashboard</span>
        </a>

        <a href="utama.php?page=jobs" class="menu-item <?= $page == 'jobs' ? 'active' : '' ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                <path d="M16 3h-8v4h8V3z"></path>
            </svg>
            <span>Jobs</span>
        </a>

        <a href="utama.php?page=jobcategory" class="menu-item <?= $page == 'jobcategory' ? 'active' : '' ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="6" cy="6" r="3"/>
                <circle cx="18" cy="6" r="3"/>
                <circle cx="6" cy="18" r="3"/>
                <circle cx="18" cy="18" r="3"/>
            </svg>
            <span>Category</span>
        </a>

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

        <a href="utama.php?page=academy" class="menu-item <?= $page == 'academy' ? 'active' : '' ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"> <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/> <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/> </svg>
            <span>Academy</span>
        </a>

        <a href="utama.php?page=user" class="menu-item <?= $page == 'user' ? 'active' : '' ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                <circle cx="9" cy="7" r="4"/>
                <path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
            <span>Workers</span>
        </a>

        <a href="utama.php?page=revenue" class="menu-item <?= $page == 'revenue' ? 'active' : '' ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 3v18h18"/>
                <path d="M18 17V9M13 17V5M8 17v-3"/>
            </svg>
            <span>Revenue</span>
        </a>

        <a href="utama.php?page=message" class="menu-item <?= $page == 'message' ? 'active' : '' ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
            </svg>
            <span>Message</span>
        </a>
    </nav>
<button class="logout-btn" id="logoutBtn">Log out</button>

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
  // Logout Popup
  const logoutBtn = document.getElementById('logoutBtn');
  const logoutModal = document.getElementById('logoutModal');
  const confirmLogout = document.getElementById('confirmLogout');
  const cancelLogout = document.getElementById('cancelLogout');

  logoutBtn.addEventListener('click', () => {
    logoutModal.style.display = 'flex';
  });
  cancelLogout.addEventListener('click', () => {
    logoutModal.style.display = 'none';
  });
  confirmLogout.addEventListener('click', () => {
    window.location.href = '../Admin/';
  });
  window.addEventListener('click', (e) => {
    if (e.target === logoutModal) {
      logoutModal.style.display = 'none';
    }
  });

  // Sidebar Toggle
  const toggleBtn = document.getElementById('toggleSidebar');
  const sidebar = document.getElementById('sidebar');
  // Removed mainContent variable from here since it's not strictly needed for this JS
  // unless other CSS is relying on an 'expanded' class on main-content, 
  // but the CSS solution with the sibling selector is better.

  toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('collapsed');
    // Removed: mainContent.classList.toggle('expanded');
  });

  // Notification Popup
  const notifBtn = document.getElementById('notifBtn');
  const notifPopup = document.getElementById('notifPopup');

  notifBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    notifPopup.classList.toggle('active');
  });

  document.addEventListener('click', (e) => {
    if (!notifPopup.contains(e.target) && !notifBtn.contains(e.target)) {
      notifPopup.classList.remove('active');
    }
  });
</script>
</aside>
        <div class="main-content" id="mainContent">
            <div class="chat-header">
                <button class="back-button" onclick="window.history.back()">‹</button>
                <div class="avatar">R</div>
                <div class="user-info">
                    <div class="user-name">Rina</div>
                    <div class="user-status">Online</div>
                </div>
            </div>

            <div class="chat-container">
                <div class="message-timestamp">21:00</div>

                <div class="message-group">
                    <div class="message message-left">
                        Halo admin, saya baru daftar di HireMesh. Bisa jelasin cara lengkapin profilnya?
                        <div class="message-time">21:00</div>
                    </div>
                </div>

                <div class="message-group">
                    <div class="message message-right">
                        Hai, terima kasih sudah bergabung! Untuk melengkapi profil, masuk ke menu Profile → Personal Information, isi data dasar seperti nama, email, dan nomor HP ya.
                        <div class="message-time">21:01</div>
                    </div>
                </div>

                <div class="message-group">
                    <div class="message message-left">
                        Oke, kalau untuk upload CV dan portofolio itu ada di bagian mana ya?
                        <div class="message-time">21:05</div>
                    </div>
                </div>

                <div class="message-group">
                    <div class="message message-right">
                        Ada di tab Documents, di situ kamu bisa upload CV (PDF/DOC) dan juga file portofolio. Wajib isi CV biar bisa apply ke lowongan.
                        <div class="message-time">21:06</div>
                    </div>
                </div>

                <div class="message-group">
                    <div class="message message-left">
                        Kalau mau apply kerjaan, caranya langsung dari halaman job listing atau harus lewat admin dulu?
                        <div class="message-time">21:10</div>
                    </div>
                </div>

                <div class="message-group">
                    <div class="message message-right">
                        Bisa langsung dari Job Listing, pilih lowongan yang cocok, klik Apply, sistem otomatis kirim profil + CV kamu ke perusahaan. Jadi gak perlu lewat admin lagi.
                        <div class="message-time">21:12</div>
                    </div>
                </div>
            </div>

            <div class="chat-input-container">
                <div class="chat-input-wrapper">
                    <input type="text" class="chat-input" placeholder="Type a message">
                    <button class="send-button">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

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
        // Logout functionality
        const logoutBtn = document.getElementById('logoutBtn');
        const logoutModal = document.getElementById('logoutModal');
        const confirmLogout = document.getElementById('confirmLogout');
        const cancelLogout = document.getElementById('cancelLogout');

        logoutBtn.addEventListener('click', () => {
            logoutModal.style.display = 'flex';
        });

        cancelLogout.addEventListener('click', () => {
            logoutModal.style.display = 'none';
        });

        confirmLogout.addEventListener('click', () => {
            alert('Logging out...');
            window.location.href = '../Admin/'; // Using the actual logout destination from the PHP section
        });

        window.addEventListener('click', (e) => {
            if (e.target === logoutModal) {
                logoutModal.style.display = 'none';
            }
        });

        // Chat functionality
        const input = document.querySelector('.chat-input');
        const sendBtn = document.querySelector('.send-button');
        const chatContainer = document.querySelector('.chat-container');
        const backBtn = document.querySelector('.back-button');
        const mainContent = document.getElementById('mainContent'); // Re-adding for better practice

        sendBtn.addEventListener('click', sendMessage);
        input.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        backBtn.addEventListener('click', () => {
            alert('Kembali ke halaman Messages');
        });

        function sendMessage() {
            const text = input.value.trim();
            if (!text) return;

            const now = new Date();
            const time = now.getHours().toString().padStart(2, '0') + ':' + 
                        now.getMinutes().toString().padStart(2, '0');

            const messageGroup = document.createElement('div');
            messageGroup.className = 'message-group';
            
            const message = document.createElement('div');
            message.className = 'message message-right';
            message.innerHTML = `
                ${text}
                <div class="message-time">${time}</div>
            `;
            
            messageGroup.appendChild(message);
            chatContainer.appendChild(messageGroup);
            
            input.value = '';
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        // Sidebar toggle
        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');

        toggleSidebar.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            // The responsiveness is handled by the CSS sibling selector:
            // .sidebar.collapsed ~ .main-content
        });
    </script>
</body>
</html>