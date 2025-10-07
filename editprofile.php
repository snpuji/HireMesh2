<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile - HireMesh</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- Find Jobs Page -->
<link rel="stylesheet" href="css/editprofile.css" />
</head>
<body>
  <div class="container main-layout">
  <!-- CARD 1 - Progress Section -->
  <section class="progress-card">
    <div class="progress-bar-container">
      <div class="progress-bar"></div>
    </div>
    <div class="progress-content">
      <div class="progress-info">
        <p class="info-text">
          <i class="fa-solid fa-circle-info"></i> 
          Your profile can't be found by recruiters because it's missing key information
        </p>
        <h4>Add your personal information</h4>
        <p>Want to stand out? Make sure your profile is complete with accurate personal details.</p>
        <div class="nav-btns">
          <button class="btn-prev"><i class="fa-solid fa-chevron-left"></i> Previous</button>
          <button class="btn-next">Next <i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>
      <div class="progress-actions">
        <span class="progress-status">4 steps to complete</span>
        <button class="btn-outline">Update now</button>
        <button class="btn-primary">Download CV</button>
      </div>
    </div>
  </section>

  <!-- CARD 2 + CARD 3 -->
  <div class="profile-container">
    <!-- CARD 2 - Sidebar -->
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
<!-- CARD 3 - Form -->
<section class="form-card">
  <div class="upload-section">
    <img src="https://via.placeholder.com/90" alt="User Photo" class="profile-pic">
    <button class="btn-upload">
      <i class="fa-solid fa-upload"></i> Upload a New Photo
    </button>
  </div>

  <form class="profile-form">
    <!-- Personal Information -->
    <div id="personal-information" class="form-section">
      <h3>Personal Information</h3>
      <label>Full Name</label>
      <input type="text" placeholder="Full Name">

      <label>Phone Number</label>
      <input type="text" placeholder="Phone Number">

      <label>Email</label>
      <input type="email" placeholder="Email">

      <label>Location</label>
      <input type="text" placeholder="Location">

      <label>Career Interest</label>
      <small class="ai-hint">This helps our AI recommend jobs that match your goals.</small>
      <input type="text" placeholder="Tell us your dream career (e.g., Designer, Data Analyst)">
    </div>

    <!-- Profile Summary -->
    <div id="profile-summary" class="form-section">
      <h3>Profile Summary</h3>
      <label>Summary</label>
      <textarea placeholder="2–3 sentences highlighting key skills and career goals"></textarea>
    </div>

    <!-- Education -->
    <div id="education" class="form-section">
      <h3>Education</h3>
      <label>Institution Name</label>
      <input type="text" placeholder="Institution Name">

      <div class="flex-row">
        <div>
          <label>Year of Entry</label>
          <input type="month">
        </div>
        <div>
          <label>Graduation</label>
          <input type="month">
        </div>
      </div>
      <button type="button" class="btn-add"><i class="fa-solid fa-plus"></i> Add More Education</button>
    </div>

    <!-- Work Experience -->
    <div id="work-experience" class="form-section">
      <h3>Work Experience</h3>
      <label>Company Name</label>
      <input type="text" placeholder="Company Name">

      <label>Job Title</label>
      <input type="text" placeholder="Job Title">

      <div class="checkbox">
        <input type="checkbox" id="stillWork">
        <label for="stillWork">I'm still working at this company</label>
      </div>

      <div class="flex-row">
        <div>
          <label>Start Work</label>
          <input type="month">
        </div>
        <div>
          <label>End Work</label>
          <input type="month">
        </div>
      </div>

      <label>Job Description</label>
      <textarea placeholder="Job Description"></textarea>

      <button type="button" class="btn-add"><i class="fa-solid fa-plus"></i> Add More Experience</button>
    </div>

    <!-- Skills -->
    <div id="skills" class="form-section">
      <h3>Skills</h3>
      <label>Hard Skills</label>
      <input type="text" placeholder="Hard Skills">

      <label>Soft Skills</label>
      <input type="text" placeholder="Soft Skills">

      <button type="button" class="btn-add"><i class="fa-solid fa-plus"></i> Add More Skills</button>
    </div>

    <!-- Certifications -->
    <div id="certifications" class="form-section">
      <h3>Certifications</h3>
      <label>Certificate Name</label>
      <input type="text" placeholder="Certificate Name">

      <label>Issuing Organization</label>
      <input type="text" placeholder="Issuing Organization">

      <label>Year</label>
      <input type="month">

      <button type="button" class="btn-add"><i class="fa-solid fa-plus"></i> Add More Certificates</button>
    </div>

    <!-- Curriculum Vitae -->
    <div id="curriculum-vitae" class="form-section">
      <h3>Curriculum Vitae</h3>
      <button type="button" class="btn-outline">
        <i class="fa-solid fa-upload"></i> Upload CV
      </button>
    </div>

    <!-- Portfolio -->
    <div id="portfolio" class="form-section">
      <h3>Portfolio</h3>
      <label>Portfolio Link</label>
      <input type="url" placeholder="https://your-portfolio.com">
    </div>

    <!-- Social Media -->
    <div id="social-media" class="form-section">
      <h3>Social Media</h3>
      <div class="social-field">
        <i class="fa-brands fa-linkedin"></i>
        <input type="url" placeholder="LinkedIn URL">
      </div>
      <div class="social-field">
        <i class="fa-brands fa-instagram"></i>
        <input type="url" placeholder="Instagram URL">
      </div>
      <div class="social-field">
        <i class="fa-brands fa-facebook"></i>
        <input type="url" placeholder="Facebook URL">
      </div>
      <div class="social-field">
        <i class="fa-brands fa-youtube"></i>
        <input type="url" placeholder="YouTube URL">
      </div>
      <div class="social-field">
        <i class="fa-brands fa-whatsapp"></i>
        <input type="url" placeholder="WhatsApp Number">
      </div>
      <div class="social-field">
        <i class="fa-brands fa-x"></i>
        <input type="url" placeholder="X (Twitter) URL">
      </div>
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
    // Active navigation based on scroll
    document.addEventListener('DOMContentLoaded', function() {
      const navItems = document.querySelectorAll('.nav-item');
      const sections = document.querySelectorAll('.form-section');

      // Smooth scroll behavior
      navItems.forEach(item => {
        item.addEventListener('click', function(e) {
          e.preventDefault();
          
          // Remove active class from all items
          navItems.forEach(nav => nav.classList.remove('active'));
          
          // Add active class to clicked item
          this.classList.add('active');
          
          // Scroll to section
          const targetId = this.getAttribute('href');
          const targetSection = document.querySelector(targetId);
          
          if (targetSection) {
            targetSection.scrollIntoView({
              behavior: 'smooth',
              block: 'start'
            });
          }
        });
      });

      // Update active nav on scroll
      window.addEventListener('scroll', function() {
        let current = '';
        
        sections.forEach(section => {
          const sectionTop = section.offsetTop;
          const sectionHeight = section.clientHeight;
          if (pageYOffset >= (sectionTop - 100)) {
            current = section.getAttribute('id');
          }
        });

        navItems.forEach(item => {
          item.classList.remove('active');
          if (item.getAttribute('href') === '#' + current) {
            item.classList.add('active');
          }
        });
      });
    });
  </script>
</body>
</html>