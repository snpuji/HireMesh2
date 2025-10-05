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

                <img src="/HireMesh2/Images/puji.png" alt="Profile" class="profile-img" title="Profile">
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

 .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 80px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 40px;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .navbar-left {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .logo {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #ff1493, #ff69b4, #4169e1);
            border-radius: 50%;
            box-shadow: 0 4px 15px rgba(255, 20, 147, 0.4);
        }

        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-links a {
            color: #1c1c1e;
            font-family: "Poppins", sans-serif;
            font-size: 16px;
            font-weight: 500;
            padding: 8px 0;
            border-bottom: 3px solid transparent;
            transition: all 0.3s;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a.active {
            color: var(--primary);
            border-bottom-color: var(--primary);
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .search-box {
            display: flex;
            align-items: center;
            padding: 8px 16px;
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 50px;
            width: 300px;
            gap: 8px;
            color: var(--text-2);
            font-family: "Poppins", sans-serif;
            font-size: 14px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .search-box:focus-within {
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.2);
        }

        .search-box input {
            border: none;
            outline: none;
            flex: 1;
            font-family: "Poppins", sans-serif;
            font-size: 14px;
            color: var(--text-1);
            background: transparent;
        }

        .search-box input::placeholder {
            color: var(--text-2);
        }

        .search-box svg {
            color: var(--text-2);
            transition: color 0.3s;
        }

        .search-box:hover svg {
            color: var(--primary);
        }

        .icon-group {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .icon-btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            background: transparent;
            color: var(--text-1);
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
        }

        .icon-btn:hover {
            color: var(--primary);
        }

        .icon-btn.notification::after {
            content: '';
            position: absolute;
            top: 8px;
            right: 8px;
            width: 8px;
            height: 8px;
            background: #3b82f6;
            border-radius: 50%;
            border: 2px solid white;
        }

        .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            object-fit: cover;
            border: 2px solid var(--border);
            transition: border-color 0.3s;
        }

        .profile-img:hover {
            border-color: var(--primary);
        }

        .hamburger {
            display: none;
            font-size: 24px;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-1);
        }

        .nav-links-desktop {
            display: flex;
        }

        .nav-links-mobile {
            display: none;
        }

        @media (max-width: 1024px) {
            .nav-links-desktop {
                display: none;
            }

            .nav-links-mobile {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            .hamburger {
                display: block;
            }

            .navbar-right {
                position: fixed;
                top: 0;
                right: -300px;
                height: 100%;
                width: 250px;
                background: white;
                flex-direction: column;
                align-items: flex-start;
                padding: 20px;
                gap: 15px;
                box-shadow: -4px 0 15px rgba(0,0,0,0.1);
                transition: right 0.3s ease;
                z-index: 999;
            }

            .navbar-right.active {
                right: 0;
            }

            .nav-links-mobile {
                width: 100%;
                border-bottom: 1px solid var(--border);
                padding-bottom: 15px;
                margin-bottom: 10px;
            }

            .nav-links-mobile a {
                width: 100%;
                padding: 12px 16px;
                border-radius: 8px;
                border-bottom: none;
            }

            .nav-links-mobile a:hover {
                background: var(--hoverbiru);
            }

            .nav-links-mobile a.active {
                background: var(--hoverbiru);
                border-bottom: none;
            }

            .search-box {
                width: 100%;
            }

            .icon-group {
                width: 100%;
                flex-direction: column;
                gap: 10px;
            }

            .icon-btn {
                width: 100%;
                justify-content: flex-start;
                padding-left: 16px;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 0 20px;
            }
        }
