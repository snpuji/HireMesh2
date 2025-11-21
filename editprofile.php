<?php
// FILE INI: editprofile.php (di-include oleh utama.php)
// ASUMSI: $pdo dan session_start() sudah ada dari utama.php

if (!isset($_SESSION['user_id'])) {
    echo "<div class='container' style='text-align:center; padding: 50px;'><h2>Akses Ditolak</h2><p>Anda harus login.</p><a href='login.php' class='btn-primary'>Login</a></div>";
    return;
}
if (!isset($pdo)) {
    echo "<div class='container'>Error: Koneksi database (pdo) tidak ditemukan.</div>";
    return;
}

$user_id = $_SESSION['user_id'];
$message = '';

// [FUNGSI HELPER FILE UPLOAD - DIPERBARUI]
if (!function_exists('handleFileUpload')) {
    function handleFileUpload($fileInput, $targetDir, $allowedTypes, $pdo, $user_id, $db_column) {
        $result = ['path' => null];
        
        if (isset($fileInput) && $fileInput['error'] == 0) {
            $stmt = $pdo->prepare("SELECT $db_column FROM users WHERE id = ?");
            $stmt->execute([$user_id]);
            $oldFilePath = $stmt->fetchColumn();

            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0755, true);
            }
            $fileName = uniqid() . '_' . basename($fileInput['name']);
            $targetPath = $targetDir . $fileName;
            $fileType = strtolower(pathinfo($targetPath, PATHINFO_EXTENSION));

            if (!in_array($fileType, $allowedTypes)) {
                return ['error' => 'Error: Tipe file tidak diizinkan. (Hanya ' . implode(', ', $allowedTypes) . ')'];
            }
            if ($fileInput['size'] > 5000000) {
                return ['error' => 'Error: Ukuran file terlalu besar (Maks 5MB).'];
            }

            if (move_uploaded_file($fileInput['tmp_name'], $targetPath)) {
                if (!empty($oldFilePath) && file_exists($oldFilePath)) {
                    unlink($oldFilePath); 
                }
                $result['success'] = $targetPath; 
            } else {
                return ['error' => 'Error: Gagal memindahkan file yang diupload.'];
            }
        }
        return $result;
    }
}


// [PROSES 1: MENANGANI SUBMIT FORM (UPDATE DATA)]
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $pdo->beginTransaction(); 

        $profilePicPath = null;
        $cvPath = null;
        $sqlFileUpdates = "";
        $fileParams = [];

        $picResult = handleFileUpload(
            $_FILES['profile_pic'], 
            'assets/img/img-profile/', 
            ['jpg', 'jpeg', 'png', 'gif'],
            $pdo, $user_id, 'profile_picture'
        );
        if (isset($picResult['success'])) {
            $sqlFileUpdates .= ", profile_picture = :profile_picture";
            $fileParams[':profile_picture'] = $picResult['success'];
        } elseif (isset($picResult['error'])) {
            $message .= $picResult['error'] . ' ';
        }
        
        $cvResult = handleFileUpload(
            $_FILES['cv_upload'], 
            'assets/img/upload-cv/', 
            ['pdf'], 
            $pdo, $user_id, 'cv_path'
        );
        if (isset($cvResult['success'])) {
            $sqlFileUpdates .= ", cv_path = :cv_path";
            $fileParams[':cv_path'] = $cvResult['success'];
        } elseif (isset($cvResult['error'])) {
            $message .= $cvResult['error'] . ' ';
        }

        $userParams = [
            ':name' => $_POST['full_name'],
            ':phone_number' => $_POST['phone_number'],
            ':email' => $_POST['email'],
            ':location' => $_POST['location'],
            ':career_interest' => $_POST['career_interest'],
            ':profile_summary' => $_POST['profile_summary'],
            ':portfolio_link' => $_POST['portfolio_link'],
            ':social_linkedin' => $_POST['social_linkedin'],
            ':social_instagram' => $_POST['social_instagram'],
            ':social_facebook' => $_POST['social_facebook'],
            ':social_youtube' => $_POST['social_youtube'],
            ':social_whatsapp' => $_POST['social_whatsapp'],
            ':social_x' => $_POST['social_x'],
            ':user_id' => $user_id
        ];
        
        $sql = "UPDATE users SET 
            name = :name, phone_number = :phone_number, email = :email, location = :location, 
            career_interest = :career_interest, profile_summary = :profile_summary, 
            portfolio_link = :portfolio_link, social_linkedin = :social_linkedin, 
            social_instagram = :social_instagram, social_facebook = :social_facebook, 
            social_youtube = :social_youtube, social_whatsapp = :social_whatsapp, social_x = :social_x
            $sqlFileUpdates 
            WHERE id = :user_id";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array_merge($userParams, $fileParams)); 
        
        // --- PROSES DATA "ADD MORE" ---

        // 1. Pendidikan
        $pdo->prepare("DELETE FROM user_education WHERE user_id = ?")->execute([$user_id]);
        if (isset($_POST['edu_institution_name'])) {
            $edu_sql = "INSERT INTO user_education (user_id, institution_name, year_entry, graduation) VALUES (?, ?, ?, ?)";
            $edu_stmt = $pdo->prepare($edu_sql);
            foreach ($_POST['edu_institution_name'] as $index => $institution) {
                if (!empty($institution)) { 
                    $edu_stmt->execute([
                        $user_id,
                        $institution,
                        $_POST['edu_year_entry'][$index],
                        $_POST['edu_graduation'][$index]
                    ]);
                }
            }
        }

        // 2. Pengalaman Kerja
        $pdo->prepare("DELETE FROM user_experience WHERE user_id = ?")->execute([$user_id]);
        if (isset($_POST['exp_company_name'])) {
            $exp_sql = "INSERT INTO user_experience (user_id, company_name, job_title, is_current, start_date, end_date, job_description) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $exp_stmt = $pdo->prepare($exp_sql);
            
            $exp_is_current_map = [];
            if (isset($_POST['exp_is_current'])) {
                foreach ($_POST['exp_is_current'] as $key => $value) {
                    $exp_is_current_map[$key] = 1;
                }
            }

            foreach ($_POST['exp_company_name'] as $index => $company) {
                if (!empty($company)) {
                    $is_current = isset($exp_is_current_map[$index]) ? 1 : 0;
                    $end_date = $is_current ? null : $_POST['exp_end_date'][$index];
                    
                    $exp_stmt->execute([
                        $user_id,
                        $company,
                        $_POST['exp_job_title'][$index],
                        $is_current,
                        $_POST['exp_start_date'][$index],
                        $end_date,
                        $_POST['exp_job_description'][$index]
                    ]);
                }
            }
        }
        
        // 3. Skills
        $pdo->prepare("DELETE FROM user_skills WHERE user_id = ?")->execute([$user_id]);
        if (isset($_POST['skill_name'])) {
            $skill_sql = "INSERT INTO user_skills (user_id, skill_name, skill_type) VALUES (?, ?, ?)";
            $skill_stmt = $pdo->prepare($skill_sql);
            foreach ($_POST['skill_name'] as $index => $skill) {
                if (!empty($skill)) {
                    $skill_stmt->execute([
                        $user_id,
                        $skill,
                        $_POST['skill_type'][$index]
                    ]);
                }
            }
        }

        // 4. Sertifikasi
        $pdo->prepare("DELETE FROM user_certifications WHERE user_id = ?")->execute([$user_id]);
        if (isset($_POST['cert_name'])) {
            $cert_sql = "INSERT INTO user_certifications (user_id, cert_name, cert_organization, cert_year) VALUES (?, ?, ?, ?)";
            $cert_stmt = $pdo->prepare($cert_sql);
            foreach ($_POST['cert_name'] as $index => $cert) {
                if (!empty($cert)) {
                    $cert_stmt->execute([
                        $user_id,
                        $cert,
                        $_POST['cert_organization'][$index],
                        $_POST['cert_year'][$index]
                    ]);
                }
            }
        }

        $pdo->commit();
        if ($message == '') {
            $message = "Profile updated successfully!";
        }

    } catch (Exception $e) {
        $pdo->rollBack(); 
        $message = "Error updating profile: Gagal update profile: " . $e->getMessage();
    }
}


// [PROSES 2: MENGAMBIL SEMUA DATA USER (UNTUK TAMPIL DI FORM)]
try {
    // 1. Data utama
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$user) {
        echo "<div class='container'>User tidak ditemukan.</div>";
        return;
    }

    // 2. Ambil data dari tabel relasi
    $education_data = $pdo->prepare("SELECT * FROM user_education WHERE user_id = ? ORDER BY id");
    $education_data->execute([$user_id]);
    $educations = $education_data->fetchAll(PDO::FETCH_ASSOC);

    $experience_data = $pdo->prepare("SELECT * FROM user_experience WHERE user_id = ? ORDER BY id");
    $experience_data->execute([$user_id]);
    $experiences = $experience_data->fetchAll(PDO::FETCH_ASSOC);
    
    $skill_data = $pdo->prepare("SELECT * FROM user_skills WHERE user_id = ? ORDER BY id");
    $skill_data->execute([$user_id]);
    $skills = $skill_data->fetchAll(PDO::FETCH_ASSOC);
    
    $certification_data = $pdo->prepare("SELECT * FROM user_certifications WHERE user_id = ? ORDER BY id");
    $certification_data->execute([$user_id]);
    $certifications = $certification_data->fetchAll(PDO::FETCH_ASSOC);

    
    // [LOGIKA UNTUK PROGRESS BAR]
    $totalSteps = 4;
    $completedSteps = 0;
    $missingSteps = []; 

    if (!empty($user['phone_number']) && !empty($user['location'])) {
        $completedSteps++;
    } else {
        $missingSteps[] = "Add your personal information (phone & location)";
    }
    if (!empty($user['profile_summary'])) {
        $completedSteps++;
    } else {
        $missingSteps[] = "Add your profile summary";
    }
    if (!empty($experiences) || !empty($educations)) {
        $completedSteps++;
    } else {
        $missingSteps[] = "Add at least one education or work experience";
    }
    if (!empty($user['cv_path'])) {
        $completedSteps++;
    } else {
        $missingSteps[] = "Upload your CV";
    }

    $progressPercent = ($completedSteps / $totalSteps) * 100;
    $stepsToComplete = $totalSteps - $completedSteps;

} catch (PDOException $e) {
    echo "<div class='container'>Error mengambil data user: " . $e->getMessage() . "</div>";
    return;
}

?>

<style>
    /* ... (CSS Anda yang lain) ... */
    .message { padding: 15px; margin-bottom: 20px; border-radius: 5px; font-weight: bold; text-align: center; }
    .message.success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
    .message.error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    input[type="file"].hidden-upload { display: none; }
    .btn-upload-label { cursor: pointer; }
    .profile-pic-preview { width: 90px; height: 90px; border-radius: 50%; object-fit: cover; background-color: #eee; }
    .cv-link { display: inline-block; margin-top: 10px; font-size: 0.9em; }
    .dynamic-form-group { border: 1px solid #eee; border-radius: 8px; padding: 15px; margin-bottom: 15px; position: relative; }
    .btn-remove { position: absolute; top: 10px; right: 10px; background: #f8d7da; color: #721c24; border: none; border-radius: 50%; width: 24px; height: 24px; cursor: pointer; font-weight: bold; }
</style>

<div class="container main-layout">
  
  <section class="progress-card">
    <div class="progress-bar-container">
      <div class="progress-bar" style="width: <?php echo $progressPercent; ?>%;"></div>
    </div>
    <div class="progress-content">
      <div class="progress-info">
        
        <?php if ($stepsToComplete > 0): ?>
          <p class="info-text">
            <i class="fa-solid fa-circle-info"></i> 
            Your profile can't be found by recruiters
          </p>
          <h4><?php echo htmlspecialchars($missingSteps[0]); ?></h4>
          <p>Want to stand out? Make sure your profile is complete.</p>
          
          <div class="nav-btns">
            <button class="btn-prev"><i class="fa-solid fa-chevron-left"></i> Previous</button>
            <button class="btn-next">Next <i class="fa-solid fa-chevron-right"></i></button>
          </div>
          
        <?php else: ?>
          <p class="info-text" style="color: #155724;">
            <i class="fa-solid fa-circle-check"></i> 
            Your profile is complete!
          </p>
          <h4>You're all set!</h4>
          <p>Recruiters can now find your profile easily.</p>
        <?php endif; ?>
        
        </div>
      <div class="progress-actions">
        <span class="progress-status">
          <?php 
            if ($stepsToComplete > 0) {
              echo $stepsToComplete . " " . ($stepsToComplete > 1 ? 'steps' : 'step') . " to complete";
            } else {
              echo "Profile Complete!";
            }
          ?>
        </span>
        
        <?php if ($stepsToComplete > 0): ?>
          <button class="btn-outline">Update now</button>
        <?php endif; ?>
        
        <a href="download_cv.php" class="btn-primary" target="_blank">Download CV</a>
      </div>
    </div>
  </section>
  <div class="profile-container">
    <aside class="sidebar">
      <a href="#personal-information" class="nav-item active">Personal Information</a>
      <a href="#profile-summary" class="nav-item">Profile Summary</a>
      <a href="#education" class="nav-item">Education</a>
      <a href="#work-experience" class="nav-item">Work Experience</a>
      <a href="#skills" class="nav-item">Skills</a>
      <a href="#certifications" class="nav-item">Certifications</a>
      <a href="#curriculum-vitae" class="nav-item">Curriculum Vitae</a>
      <a href="#portfolio" class="nav-item">Portfolio</a>
      <a href="#social-media" class="nav-item">Social Media</a>
    </aside>
    
<section class="form-card">
  <form class="profile-form" method="POST" action="utama.php?page=editprofile" enctype="multipart/form-data">
  
    <?php if (!empty($message)) : ?>
      <div class="message <?php echo strpos($message, 'Gagal') !== false || strpos($message, 'Error') !== false ? 'error' : 'success'; ?>">
        <?php echo htmlspecialchars($message); ?>
      </div>
    <?php endif; ?>

    <div class="upload-section">
      <img src="<?php echo (!empty($user['profile_picture']) && file_exists($user['profile_picture'])) ? htmlspecialchars($user['profile_picture']) : 'https://via.placeholder.com/90'; ?>" 
           alt="User Photo" class="profile-pic-preview">
      
      <input type="file" id="profile_pic_upload" name="profile_pic" class="hidden-upload" 
             accept="image/png, image/jpeg, image/gif">
      
      <label for="profile_pic_upload" class="btn-upload btn-upload-label">
        <i class="fa-solid fa-upload"></i> Upload a New Photo
      </label>
    </div>

    <div id="personal-information" class="form-section">
      <h3>Personal Information</h3>
      <label>Full Name</label>
      <input type="text" name="full_name" placeholder="Full Name" value="<?php echo htmlspecialchars($user['name'] ?? ''); ?>">
      <label>Phone Number</label>
      <input type="text" name="phone_number" placeholder="Phone Number" value="<?php echo htmlspecialchars($user['phone_number'] ?? ''); ?>">
      <label>Email</label>
      <input type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($user['email'] ?? ''); ?>">
      <label>Location</label>
      <input type="text" name="location" placeholder="Location" value="<?php echo htmlspecialchars($user['location'] ?? ''); ?>">
      <label>Career Interest</label>
      <small class="ai-hint">This helps our AI recommend jobs that match your goals.</small>
      <input type="text" name="career_interest" placeholder="Tell us your dream career (e.g., Designer, Data Analyst)" value="<?php echo htmlspecialchars($user['career_interest'] ?? ''); ?>">
    </div>

    <div id="profile-summary" class="form-section">
      <h3>Profile Summary</h3>
      <label>Summary</label>
      <textarea name="profile_summary" placeholder="2–3 sentences highlighting key skills and career goals"><?php echo htmlspecialchars($user['profile_summary'] ?? ''); ?></textarea>
    </div>

    <div id="education" class="form-section">
      <h3>Education</h3>
      <div id="education-container">
        <?php if (empty($educations)): ?>
          <div class="dynamic-form-group">
            <button type="button" class="btn-remove" onclick="this.parentElement.remove()">X</button>
            <label>Institution Name</label>
            <input type="text" name="edu_institution_name[]" placeholder="Institution Name" value="">
            <div class="flex-row">
              <div><label>Year of Entry</label><input type="month" name="edu_year_entry[]" value=""></div>
              <div><label>Graduation</label><input type="month" name="edu_graduation[]" value=""></div>
            </div>
          </div>
        <?php else: ?>
          <?php foreach ($educations as $edu): ?>
            <div class="dynamic-form-group">
              <button type="button" class="btn-remove" onclick="this.parentElement.remove()">X</button>
              <label>Institution Name</label>
              <input type="text" name="edu_institution_name[]" placeholder="Institution Name" value="<?php echo htmlspecialchars($edu['institution_name']); ?>">
              <div class="flex-row">
                <div><label>Year of Entry</label><input type="month" name="edu_year_entry[]" value="<?php echo htmlspecialchars($edu['year_entry']); ?>"></div>
                <div><label>Graduation</label><input type="month" name="edu_graduation[]" value="<?php echo htmlspecialchars($edu['graduation']); ?>"></div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <button type="button" class="btn-add" onclick="addEducation()"><i class="fa-solid fa-plus"></i> Add More Education</button>
    </div>

    <div id="work-experience" class="form-section">
      <h3>Work Experience</h3>
      <div id="experience-container">
        <?php if (empty($experiences)): ?>
          <div class="dynamic-form-group">
            <button type="button" class="btn-remove" onclick="this.parentElement.remove()">X</button>
            <label>Company Name</label>
            <input type="text" name="exp_company_name[]" placeholder="Company Name" value="">
            <label>Job Title</label>
            <input type="text" name="exp_job_title[]" placeholder="Job Title" value="">
            <div class="checkbox">
              <input type="checkbox" name="exp_is_current[0]">
              <label>I'm still working at this company</label>
            </div>
            <div class="flex-row">
              <div><label>Start Work</label><input type="month" name="exp_start_date[]" value=""></div>
              <div><label>End Work</label><input type="month" name="exp_end_date[]" value=""></div>
            </div>
            <label>Job Description</label>
            <textarea name="exp_job_description[]" placeholder="Job Description"></textarea>
          </div>
        <?php else: ?>
          <?php foreach ($experiences as $index => $exp): ?>
            <div class="dynamic-form-group">
              <button type="button" class="btn-remove" onclick="this.parentElement.remove()">X</button>
              <label>Company Name</label>
              <input type="text" name="exp_company_name[]" placeholder="Company Name" value="<?php echo htmlspecialchars($exp['company_name']); ?>">
              <label>Job Title</label>
              <input type="text" name="exp_job_title[]" placeholder="Job Title" value="<?php echo htmlspecialchars($exp['job_title']); ?>">
              <div class="checkbox">
                <input type="checkbox" name="exp_is_current[<?php echo $index; ?>]" <?php echo $exp['is_current'] ? 'checked' : ''; ?>>
                <label>I'm still working at this company</label>
              </div>
              <div class="flex-row">
                <div><label>Start Work</label><input type="month" name="exp_start_date[]" value="<?php echo htmlspecialchars($exp['start_date']); ?>"></div>
                <div><label>End Work</label><input type="month" name="exp_end_date[]" value="<?php echo htmlspecialchars($exp['end_date']); ?>"></div>
              </div>
              <label>Job Description</label>
              <textarea name="exp_job_description[]" placeholder="Job Description"><?php echo htmlspecialchars($exp['job_description']); ?></textarea>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <button type="button" class="btn-add" onclick="addExperience()"><i class="fa-solid fa-plus"></i> Add More Experience</button>
    </div>

    <div id="skills" class="form-section">
      <h3>Skills</h3>
      <div id="skills-container">
        <?php if (empty($skills)): ?>
           <div class="dynamic-form-group">
            <button type="button" class="btn-remove" onclick="this.parentElement.remove()">X</button>
            <div class="flex-row">
                <div>
                    <label>Skill Name</label>
                    <input type="text" name="skill_name[]" placeholder="e.g. PHP, Communication" value="">
                </div>
                <div>
                    <label>Skill Type</label>
                    <select name="skill_type[]">
                        <option value="hard">Hard Skill</option>
                        <option value="soft">Soft Skill</option>
                    </select>
                </div>
            </div>
          </div>
        <?php else: ?>
          <?php foreach ($skills as $skill): ?>
            <div class="dynamic-form-group">
              <button type="button" class="btn-remove" onclick="this.parentElement.remove()">X</button>
              <div class="flex-row">
                  <div>
                      <label>Skill Name</label>
                      <input type="text" name="skill_name[]" placeholder="e.g. PHP, Communication" value="<?php echo htmlspecialchars($skill['skill_name']); ?>">
                  </div>
                  <div>
                      <label>Skill Type</label>
                      <select name="skill_type[]">
                          <option value="hard" <?php echo $skill['skill_type'] == 'hard' ? 'selected' : ''; ?>>Hard Skill</option>
                          <option value="soft" <?php echo $skill['skill_type'] == 'soft' ? 'selected' : ''; ?>>Soft Skill</option>
                      </select>
                  </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <button type="button" class="btn-add" onclick="addSkill()"><i class="fa-solid fa-plus"></i> Add More Skills</button>
    </div>

    <div id="certifications" class="form-section">
      <h3>Certifications</h3>
      <div id="certifications-container">
          <?php if (empty($certifications)): ?>
            <div class="dynamic-form-group">
                <button type="button" class="btn-remove" onclick="this.parentElement.remove()">X</button>
                <label>Certificate Name</label>
                <input type="text" name="cert_name[]" placeholder="Certificate Name" value="">
                <label>Issuing Organization</label>
                <input type="text" name="cert_organization[]" placeholder="Issuing Organization" value="">
                <label>Year</label>
                <input type="month" name="cert_year[]" value="">
            </div>
          <?php else: ?>
            <?php foreach ($certifications as $cert): ?>
              <div class="dynamic-form-group">
                  <button type="button" class="btn-remove" onclick="this.parentElement.remove()">X</button>
                  <label>Certificate Name</label>
                  <input type="text" name="cert_name[]" placeholder="Certificate Name" value="<?php echo htmlspecialchars($cert['cert_name']); ?>">
                  <label>Issuing Organization</label>
                  <input type="text" name="cert_organization[]" placeholder="Issuing Organization" value="<?php echo htmlspecialchars($cert['cert_organization']); ?>">
                  <label>Year</label>
                  <input type="month" name="cert_year[]" value="<?php echo htmlspecialchars($cert['cert_year']); ?>">
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
      </div>
      <button type="button" class="btn-add" onclick="addCertification()"><i class="fa-solid fa-plus"></i> Add More Certificates</button>
    </div>

    <div id="curriculum-vitae" class="form-section">
      <h3>Curriculum Vitae</h3>
      <input type="file" id="cv_upload" name="cv_upload" class="hidden-upload" accept="application/pdf">
      <label for="cv_upload" class="btn-outline btn-upload-label">
        <i class="fa-solid fa-upload"></i> Upload CV (PDF Only)
      </label>
      <?php if (!empty($user['cv_path']) && file_exists($user['cv_path'])): ?>
        <a href="<?php echo htmlspecialchars($user['cv_path']); ?>" target="_blank" class="cv-link">
          Lihat CV yang sudah diupload
        </a>
      <?php endif; ?>
    </div>

    <div id="portfolio" class="form-section">
      <h3>Portfolio</h3>
      <label>Portfolio Link</label>
      <input type="url" name="portfolio_link" placeholder="https://your-portfolio.com" value="<?php echo htmlspecialchars($user['portfolio_link'] ?? ''); ?>">
    </div>

    <div id="social-media" class="form-section">
      <h3>Social Media</h3>
      <div class="social-field"><i class="fa-brands fa-linkedin"></i><input type="url" name="social_linkedin" placeholder="LinkedIn URL" value="<?php echo htmlspecialchars($user['social_linkedin'] ?? ''); ?>"></div>
      <div class="social-field"><i class="fa-brands fa-instagram"></i><input type="url" name="social_instagram" placeholder="Instagram URL" value="<?php echo htmlspecialchars($user['social_instagram'] ?? ''); ?>"></div>
      <div class="social-field"><i class="fa-brands fa-facebook"></i><input type="url" name="social_facebook" placeholder="Facebook URL" value="<?php echo htmlspecialchars($user['social_facebook'] ?? ''); ?>"></div>
      <div class="social-field"><i class="fa-brands fa-youtube"></i><input type="url" name="social_youtube" placeholder="YouTube URL" value="<?php echo htmlspecialchars($user['social_youtube'] ?? ''); ?>"></div>
      <div class="social-field"><i class="fa-brands fa-whatsapp"></i><input type="url" name="social_whatsapp" placeholder="WhatsApp Number (e.g. 62812...)" value="<?php echo htmlspecialchars($user['social_whatsapp'] ?? ''); ?>"></div>
      <div class="social-field"><i class="fa-brands fa-x"></i><input type="url" name="social_x" placeholder="X (Twitter) URL" value="<?php echo htmlspecialchars($user['social_x'] ?? ''); ?>"></div>
    </div>

    <div class="form-buttons">
      <button type="button" class="btn-outline"  onclick="history.back()">Back</button>
      <button type="submit" class="btn-primary">Save</button>
    </div>
  </form>
</section>

  </div>
</div>

<script>
function addEducation() {
    const container = document.getElementById('education-container');
    const newBlock = document.createElement('div');
    newBlock.className = 'dynamic-form-group';
    newBlock.innerHTML = `
        <button type="button" class="btn-remove" onclick="this.parentElement.remove()">X</button>
        <label>Institution Name</label>
        <input type="text" name="edu_institution_name[]" placeholder="Institution Name">
        <div class="flex-row">
            <div><label>Year of Entry</label><input type="month" name="edu_year_entry[]"></div>
            <div><label>Graduation</label><input type="month" name="edu_graduation[]"></div>
        </div>
    `;
    container.appendChild(newBlock);
}

function addExperience() {
    const container = document.getElementById('experience-container');
    const newBlock = document.createElement('div');
    newBlock.className = 'dynamic-form-group';
    const uniqueId = 'new_exp_' + container.children.length;
    newBlock.innerHTML = `
        <button type="button" class="btn-remove" onclick="this.parentElement.remove()">X</button>
        <label>Company Name</label>
        <input type="text" name="exp_company_name[]" placeholder="Company Name">
        <label>Job Title</label>
        <input type="text" name="exp_job_title[]" placeholder="Job Title">
        <div class="checkbox">
            <input type="checkbox" name="exp_is_current[${uniqueId}]">
            <label>I'm still working at this company</label>
        </div>
        <div class="flex-row">
            <div><label>Start Work</label><input type="month" name="exp_start_date[]"></div>
            <div><label>End Work</label><input type="month" name="exp_end_date[]"></div>
        </div>
        <label>Job Description</label>
        <textarea name="exp_job_description[]" placeholder="Job Description"></textarea>
    `;
    container.appendChild(newBlock);
}

function addSkill() {
    const container = document.getElementById('skills-container');
    const newBlock = document.createElement('div');
    newBlock.className = 'dynamic-form-group';
    newBlock.innerHTML = `
        <button type="button" class="btn-remove" onclick="this.parentElement.remove()">X</button>
        <div class="flex-row">
            <div>
                <label>Skill Name</label>
                <input type="text" name="skill_name[]" placeholder="e.g. PHP, Communication">
            </div>
            <div>
                <label>Skill Type</label>
                <select name="skill_type[]">
                    <option value="hard">Hard Skill</option>
                    <option value="soft">Soft Skill</option>
                </select>
            </div>
        </div>
    `;
    container.appendChild(newBlock);
}

function addCertification() {
    const container = document.getElementById('certifications-container');
    const newBlock = document.createElement('div');
    newBlock.className = 'dynamic-form-group';
    newBlock.innerHTML = `
        <button type="button" class="btn-remove" onclick="this.parentElement.remove()">X</button>
        <label>Certificate Name</label>
        <input type="text" name="cert_name[]" placeholder="Certificate Name">
        <label>Issuing Organization</label>
        <input type="text" name="cert_organization[]" placeholder="Issuing Organization">
        <label>Year</label>
        <input type="month" name="cert_year[]">
    `;
    container.appendChild(newBlock);
}

</script>