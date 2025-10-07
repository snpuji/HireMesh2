<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <div class="profile-container">

        <div class="banner-area">
            <input type="file" id="banner-upload" accept="image/*" style="display: none;">
            <label for="banner-upload" class="banner-upload-box">
                <i class="fas fa-plus banner-icon"></i>
                <p>Add a Banner Image</p>
                <p class="optimal-dim">Optimal dimensions 1440 x 410 px</p>
            </label>
        </div>
        
        <div class="main-content-wrapper">
            
            <aside class="sidebar-profile">
                <div class="profile-info">
                    <div class="profile-pic-container">
                        <img src="/HireMesh2/Images/puji.png" alt="Pjay Profile" class="profile-picture">
                    </div>
                    <h1 class="user-name">Pjay</h1>
                    
                    <a href="utama.php?page=editprofile" class="btn btn-primary">
                    <i class="fas fa-edit"></i> Edit Profile
                    </a>
                    <button class="btn btn-secondary">View Profile</button>
                    

                    <div class="availability-card">
                        <p class="availability-title">Looking for opportunity?</p>
                        <p class="availability-desc">Update your availability status to let others know if you're open for freelance work, collaboration, or new project opportunities.</p>
                        <button class="btn btn-edit-availability">Edit Availability</button>
                    </div>
                    <button class="btn btn-third">Log Out</button>
                </div>
            </aside>

            <main class="main-job-recommendations">
                
                <nav class="tab-navigation">
                    <a href="#recommendations" class="tab-item active">AI Job Recommendations</a>
                    <a href="#purchase" class="tab-item">Purchase History</a>
                    <a href="#bookmarks" class="tab-item">Bookmarks</a>
                </nav>
                <div id="recommendations" class="tab-content active-content">
        
                <p class="job-count-title">7 Job Recommendations for You</p>

                <div class="job-card">
                    <div class="job-details">
                        <p class="time-ago">5 hour ago</p>
                        <div class="company-logo-info">
                            <div class="logo-box" style="background-color: #4B0082;"></div>
                            <div>
                                <h3 class="job-company-title">TenTwenty </h3>
                                <p class="job-role">UI/UX Designer</p>
                            </div>
                        </div>
                        <p class="match-score">92% match with your profile</p>
                    </div>
                    <div class="job-meta">
                        <button class="bookmark-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </button>
                        <p class="salary-range">$50k-$80k</p>
                        <div class="job-tags">
                            <span class="tag">Easy apply</span>
                            <span class="tag">Remote</span>
                            <span class="tag">Indonesian Only</span>
                            <span class="tag">Internship</span>
                        </div>
                    </div>
                </div>

                <div class="job-card">
                    <div class="job-details">
                        <p class="time-ago">5 hour ago</p>
                        <div class="company-logo-info">
                            <div class="logo-box" style="background-color: #E63946;"></div>
                            <div>
                                <h3 class="job-company-title">CleverTap </h3>
                                <p class="job-role">UI/UX Designer</p>
                            </div>
                        </div>
                        <p class="match-score">92% match with your profile</p>
                    </div>
                    <div class="job-meta">
                        <button class="bookmark-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </button>
                        <p class="salary-range">$50k-$80k</p>
                        <div class="job-tags">
                            <span class="tag">Visit website to apply</span>
                            <span class="tag">Remote</span>
                            <span class="tag">Indonesian Only</span>
                            <span class="tag">Internship</span>
                        </div>
                    </div>
                </div>
            </div>
               
    <div id="purchase" class="tab-content">
        <div class="purchase-table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr 
                        data-class-info='{"kelas":"UI/UX Desain Dasar", "zoom":"[LINK ZOOM]", "wa":"[LINK WA KELAS]"}' 
                        class="purchase-row"
                    >
                        <td>V1</td>
                        <td>Andi Pratama</td>
                        <td>C1</td>
                        <td>Rp.100.000</td>
                        <td>10%</td>
                        <td><button class="btn btn-primary modal-action-btn">Access</button></td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>

            <div id="bookmarks" class="tab-content">
                <p class="job-count-title">2 Bookmarks</p>
                
                <div class="job-card">
                    <div class="job-details">
                        <p class="time-ago">5 hour ago</p>
                        <div class="company-logo-info">
                            <div class="logo-box" style="background-color: #4B0082;"></div>
                            <div>
                                <h3 class="job-company-title">TenTwenty </h3>
                                <p class="job-role">UI/UX Designer</p>
                            </div>
                        </div>
                        <p class="match-score">92% match with your profile</p>
                    </div>
                    <div class="job-meta">
                        <button class="bookmark-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </button>
                        <p class="salary-range">$50k-$80k</p>
                        <div class="job-tags">
                            <span class="tag">Easy apply</span>
                            <span class="tag">Remote</span>
                            <span class="tag">Indonesian Only</span>
                            <span class="tag">Internship</span>
                        </div>
                    </div>
                </div>
            </div> 
                
            </main>
            <div id="classModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <h3 class="modal-title">Class Access Information</h3>
        <p><span id="className"></span> Your access to the Basic UI/UX Design class is now ready!!</p>
        <div class="modal-info-group">
            <p><strong>Link Zoom:</strong> <a href="#" id="zoomLink" target="_blank">Click here to join</a></p>
            <p><strong>Grup WhatsApp:</strong> <a href="#" id="waLink" target="_blank">Join the WA Group</a></p>
        </div>
        <button class="btn btn-primary modal-action-btn">Start the Class Now</button>
    </div>
</div>

        </div>
    </div>
    <script>
        // Untuk membuat banner upload seolah-olah membuka file manager
        document.getElementById('banner-upload').addEventListener('change', function() {
            if (this.files && this.files[0]) {
                alert('File terpilih: ' + this.files[0].name);
                // Di sini Anda dapat menambahkan logika untuk menampilkan pratinjau gambar yang diunggah.
            }
        });
        
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabItems = document.querySelectorAll('.tab-item');
        const tabContents = document.querySelectorAll('.tab-content');
        const bookmarkBtns = document.querySelectorAll('.bookmark-btn');
        const modal = document.getElementById('classModal');
        const closeBtn = document.querySelector('.close-btn');
        const accessBtns = document.querySelectorAll('.modal-action-btn');

        // === 1. LOGIC TAB SWITCHING ===
        tabItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault(); 
                
                tabItems.forEach(t => t.classList.remove('active'));
                tabContents.forEach(c => c.classList.remove('active-content'));

                this.classList.add('active');

                const targetId = this.getAttribute('href').substring(1);
                const targetContent = document.getElementById(targetId);

                if (targetContent) {
                    targetContent.classList.add('active-content');
                }
            });
        });

        // === 2. LOGIC BOOKMARK (PERBAIKAN) ===
        bookmarkBtns.forEach(btn => {
             btn.addEventListener('click', (e) => {
                e.stopPropagation(); // Mencegah klik menyebar ke job-card parent
                // 🎯 PERBAIKAN: Tombol toggle class 'active' agar statusnya berubah
                btn.classList.toggle('active'); 
             });
        });

        // === 3. LOGIC MODAL (POPUP) ===

        // Buka Modal
        accessBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const row = this.closest('tr');
                const info = JSON.parse(row.getAttribute('data-class-info'));
                
                // Isi konten modal
                document.getElementById('className').textContent = info.kelas;
                document.getElementById('zoomLink').href = info.zoom;
                document.getElementById('waLink').href = info.wa;

                // Tampilkan modal
                modal.style.display = 'flex';
            });
        });

        // Tutup Modal saat tombol X diklik
        closeBtn.onclick = function() {
            modal.style.display = 'none';
        }

        // Tutup Modal saat user klik di luar konten (Overlay)
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }

        // === 4. LOGIC BANNER UPLOAD ===
        document.getElementById('banner-upload').addEventListener('change', function() {
            if (this.files && this.files[0]) {
                alert('File terpilih: ' + this.files[0].name);
            }
        });
    });
</script>
</body>
</html>