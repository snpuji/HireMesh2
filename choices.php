<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What brings you to HireMesh?</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/choices.css" />
</head>
<body>
    <div class="main-container">
        <button class="back-button" onclick="history.back()">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M12.5 15L7.5 10L12.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Previous
        </button>

        <div class="logo">
            <div class="logo-circle"></div>
        </div>

        <h1>What brings you to HireMesh?</h1>

        <div class="cards-container">
            <!-- Company Card -->
            <div class="card" onclick="openPopup()">
                <div class="card-content">
                    <div class="card-title">I'm a company</div>
                    <div class="card-description">
                        Discover top creative talents and streamline your hiring process.
                    </div>
                </div>
                <div class="card-illustration">
                    <img src="/HireMesh2/Images/gm1.png" alt="Company illustration" onerror="this.style.display='none'">
                </div>
            </div>

            <!-- Popup Modal -->
            <div id="popup" class="popup-overlay">
                <div class="popup-content">
                    <!-- Icon Coming Soon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <h2>Coming Soon</h2>
                    <p>
                        The Company section is still under development.<br>
                        If you’d like to post a job opening, please contact our admin at 
                        <b>srinuryanipujiastuti@gmail.com</b>.<br><br>
                        <em>Notes: Posting is FREE during this early phase—don’t miss out!</em>
                    </p>

                    <button class="close-btn" onclick="closePopup()">Close</button>
                </div>
            </div>
            <script>
                function openPopup() {
                    document.getElementById("popup").style.display = "flex";
                }
                function closePopup() {
                    document.getElementById("popup").style.display = "none";
                }
            </script>

            <!-- Job Seeker Card -->
            <a href="signup.php" class="card">
                <div class="card-content">
                    <div class="card-title">I'm a job seeker</div>
                    <div class="card-description">
                        Create your profile, showcase your best work, and land your dream job.
                    </div>
                </div>
                <div class="card-illustration">
                    <img src="/HireMesh2/Images/gm2.png" alt="Job seeker illustration" onerror="this.style.display='none'">
                </div>
            </a>
        </div>
    </div>

    <script>
        function selectOption(type) {
            console.log('Selected:', type);
            // Add your navigation logic here
        }
    </script>
</body>
</html>