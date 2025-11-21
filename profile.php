<?php
// FILE INI: profile.php (FIXED ALIGNMENT)

if (!isset($_SESSION['user_id'])) {
    echo "<div class='container' style='text-align:center; padding: 50px;'><h2>Akses Ditolak</h2><p>Anda harus login untuk melihat halaman ini.</p><a href='login.php' class='btn-primary'>Login</a></div>";
    return; 
}
if (!isset($pdo)) {
    echo "<div class='container'>Error: Koneksi database (pdo) tidak ditemukan.</div>";
    return;
}

$user_id = $_SESSION['user_id'];
$user = null;
$job_recommendations = []; 

try {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "<div class='container'>User tidak ditemukan.</div>";
        return;
    }

    $profile_pic_path = 'https://via.placeholder.com/150/EBF4FA/808080?text=No+Photo'; 
    if (!empty($user['profile_picture']) && file_exists($user['profile_picture'])) {
        $profile_pic_path = $user['profile_picture'];
    }

    // LOGIKA API
    $interest = !empty($user['career_interest']) ? urlencode($user['career_interest']) : 'developer';
    $api_url = "https://www.arbeitnow.com/api/job-board-api?search=" . $interest . "&limit=10";
    $json_data = @file_get_contents($api_url);
    
    if ($json_data) {
        $decoded_data = json_decode($json_data, true);
        $job_recommendations = $decoded_data['data'] ?? [];
    }

} catch (PDOException $e) {
    echo "<div class='container'>Error mengambil data user: " . $e->getMessage() . "</div>";
    return;
}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime();
    if (is_numeric($datetime)) {
        $ago = new DateTime("@$datetime");
    } else {
        try {
            $ago = new DateTime($datetime);
        } catch (Exception $e) { return "Baru saja"; }
    }
    $diff = $now->diff($ago);
    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;
    $string = array('y' => 'year', 'm' => 'month', 'w' => 'week', 'd' => 'day', 'h' => 'hour', 'i' => 'minute', 's' => 'second');
    foreach ($string as $k => &$v) {
        if ($diff->$k) { $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : ''); } else { unset($string[$k]); }
    }
    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function getRandomColor() {
    $colors = ['#4B0082', '#E63946', '#2A9D8F', '#F4A261', '#264653', '#1D3557'];
    return $colors[array_rand($colors)];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Dashboard - HireMesh</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/profile.css"> 
</head>
<body>

    <div class="banner-area">
        <input type="file" id="banner-upload" accept="image/*" style="display: none;">
        <label for="banner-upload" class="banner-upload-box">
            <i class="fas fa-plus banner-icon"></i>
            <p>Add a Banner Image</p>
            <p class="optimal-dim">Optimal dimensions 1440 x 410 px</p>
        </label>
    </div>

    <div class="profile-container">
        <div class="main-content-wrapper">
            
            <aside class="sidebar-profile">
                <div class="profile-info">
                    <div class="profile-pic-container">
                        <img src="<?php echo htmlspecialchars($profile_pic_path); ?>" alt="Profile" class="profile-picture">
                    </div>
                    <h1 class="user-name"><?php echo htmlspecialchars($user['name']); ?></h1>
                    <p style="font-size: 14px; color: #666; margin-bottom: 15px;">
                        Interest: <strong><?php echo htmlspecialchars($user['career_interest'] ?? 'Not Set'); ?></strong>
                    </p>
                    <a href="utama.php?page=editprofile" class="btn btn-primary" style="text-decoration:none; text-align:center; display:block;">
                        <i class="fas fa-edit"></i> Edit Profile
                    </a>
                    <button class="btn btn-secondary">View Profile</button>
                    <div class="availability-card">
                        <p class="availability-title">Share your experience with HireMesh</p>
                        <p class="availability-desc">Share your story whether you landed a job or joined a project. Your feedback helps us improve and inspire others.</p>
                        <button class="btn btn-edit-availability">Give a Review</button>
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
                    <p class="job-count-title">
                        <?php echo count($job_recommendations); ?> Job Recommendations for You 
                        (Based on "<?php echo htmlspecialchars($user['career_interest'] ?? 'General'); ?>")
                    </p>

                    <?php 
                    if (!empty($job_recommendations)): 
                        $limit_jobs = array_slice($job_recommendations, 0, 7);
                        foreach ($limit_jobs as $job): 
                            $title = $job['title'];
                            $company = $job['company_name'];
                            $location = $job['location'];
                            $remote = $job['remote'] ? 'Remote' : 'On-site';
                            $created_at = isset($job['created_at']) ? $job['created_at'] : time();
                            $date_posted = time_elapsed_string($created_at);
                            $link = $job['url'];
                            $bg_color = getRandomColor();
                            $tags = $job['tags'] ?? [];
                            $display_tags = array_slice($tags, 0, 2);
                    ?>
                    
                    <div class="job-card">
                        <div class="job-details">
                            <div class="logo-box" style="background-color: <?php echo $bg_color; ?>; display:flex; align-items:center; justify-content:center; color:white; font-weight:bold; font-size:20px;">
                                <?php echo substr($company, 0, 1); ?>
                            </div>
                            <div class="company-text-wrapper">
                                <h3 class="job-company-title"><?php echo htmlspecialchars($company); ?></h3>
                                <p class="job-role"><?php echo htmlspecialchars($title); ?></p>
                                <p class="job-role" style="font-size:12px; color:#999;"><?php echo $date_posted; ?></p>
                                <p class="match-score"><?php echo rand(80, 99); ?>% match</p>
                            </div>
                        </div>

                        <div class="job-meta">
                            <div class="salary-wrapper">
                                <p class="salary-range">Competitive</p>
                                <button class="bookmark-btn">
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 17L7 13L2 17V2C2 1.73478 2.10536 1.48043 2.29289 1.29289C2.48043 1.10536 2.73478 1 3 1H11C11.2652 1 11.5196 1.10536 11.7071 1.29289C11.8946 1.48043 12 1.73478 12 2V17Z" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>

                            <div class="job-tags">
                                <span class="tag"><?php echo $remote; ?></span>
                                <span class="tag"><?php echo htmlspecialchars($location); ?></span>
                                <?php foreach($display_tags as $tag): ?>
                                    <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                    <?php else: ?>
                        <div style="padding: 20px; text-align: center; color: #666;">
                            <p>Belum ada rekomendasi pekerjaan. Coba update "Career Interest" di profil kamu.</p>
                        </div>
                    <?php endif; ?>
                </div>
               
                <div id="purchase" class="tab-content">
                    <div class="purchase-table-container">
                        <table>
                            <thead><tr><th>ID</th><th>Course Name</th><th>Category</th><th>Price</th><th>Action</th></tr></thead>
                            <tbody>
                                <tr data-class-info='{"kelas":"UI/UX Desain Dasar", "zoom":"#", "wa":"#"}' class="purchase-row">
                                    <td>V1</td><td>Mastering Figma</td><td>Design</td><td>Rp.100.000</td>
                                    <td><button class="btn btn-primary modal-action-btn" style="width:auto; padding:5px 15px; font-size:12px;">Access</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="bookmarks" class="tab-content">
                    <p class="job-count-title">2 Bookmarks</p>
                    <div class="job-card">
                        <div class="job-details">
                            <div class="logo-box" style="background-color: #4B0082;"></div>
                            <div class="company-text-wrapper">
                                <h3 class="job-company-title">TenTwenty</h3>
                                <p class="job-role">UI/UX Designer</p>
                                <p class="match-score">Saved</p>
                            </div>
                        </div>
                        <div class="job-meta">
                            <div class="salary-wrapper">
                                <p class="salary-range">$50k-$80k</p>
                                <button class="bookmark-btn active">
                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 17L7 13L2 17V2C2 1.73478 2.10536 1.48043 2.29289 1.29289C2.48043 1.10536 2.73478 1 3 1H11C11.2652 1 11.5196 1.10536 11.7071 1.29289C11.8946 1.48043 12 1.73478 12 2V17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="job-tags">
                                <span class="tag">Remote</span>
                            </div>
                        </div>
                    </div>
                </div> 
            </main>

            <div id="classModal" class="modal">
                <div class="modal-content">
                    <span class="close-btn">&times;</span>
                    <h3 class="modal-title">Class Access Information</h3>
                    <p><span id="className"></span> Your access is ready!</p>
                    <div class="modal-info-group">
                        <p><strong>Zoom Link:</strong> <a href="#" id="zoomLink" target="_blank">Join Meeting</a></p>
                        <p><strong>WhatsApp Group:</strong> <a href="#" id="waLink" target="_blank">Join Group</a></p>
                    </div>
                    <button class="btn btn-primary">Start Now</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabItems = document.querySelectorAll('.tab-item');
            const tabContents = document.querySelectorAll('.tab-content');
            const bookmarkBtns = document.querySelectorAll('.job-card .bookmark-btn');
            const modal = document.getElementById('classModal');
            const closeBtn = document.querySelector('.close-btn');
            const accessBtns = document.querySelectorAll('.modal-action-btn');
            const bannerInput = document.getElementById('banner-upload');
            const bannerArea = document.querySelector('.banner-area');

            bannerInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) { bannerArea.style.backgroundImage = `url('${e.target.result}')`; }
                    reader.readAsDataURL(file);
                }
            });

            tabItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault(); 
                    tabItems.forEach(t => t.classList.remove('active'));
                    tabContents.forEach(c => c.classList.remove('active-content'));
                    this.classList.add('active');
                    const targetId = this.getAttribute('href').substring(1);
                    const targetContent = document.getElementById(targetId);
                    if (targetContent) targetContent.classList.add('active-content');
                });
            });

            bookmarkBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    btn.classList.toggle('active');
                    const svgPath = btn.querySelector('path');
                    if(btn.classList.contains('active')){
                        svgPath.setAttribute('fill', '#007bff');
                        svgPath.setAttribute('stroke', '#007bff');
                    } else {
                        svgPath.setAttribute('fill', 'none');
                        svgPath.setAttribute('stroke', '#999999');
                    }
                });
            });

            accessBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const row = this.closest('tr');
                    const info = JSON.parse(row.getAttribute('data-class-info'));
                    document.getElementById('className').textContent = info.kelas;
                    document.getElementById('zoomLink').href = info.zoom;
                    document.getElementById('waLink').href = info.wa;
                    modal.style.display = 'flex';
                });
            });

            closeBtn.onclick = () => modal.style.display = 'none';
            window.onclick = (e) => { if (e.target == modal) modal.style.display = 'none'; }
            if(window.location.hash === "#purchase") { document.querySelector('a[href="#purchase"]').click(); }
        });
    </script>
</body>
</html>