<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySkill Academy</title>
    <!-- Find Jobs Page -->
<link rel="stylesheet" href="css/course.css" />
<link rel="stylesheet" href="css/findjob.css" />

    <style>
        
    </style>
</head>
<body>
    <section class="academy-page-wrapper">
        <div class="academy-header">
            <a class="back-btn"  onclick="history.back()">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M15 18l-6-6 6-6"/>
                </svg>
                All Companies
            </a>
        </div>

        <section class="profile-section">
            <div class="academy-logo">MySkill</div>
            
            <div class="profile-info">
                <h1 class="academy-name">MySkill</h1>
                
                <div class="profile-meta">
                    <div class="meta-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        4 Job
                    </div>
                    <div class="meta-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
                        </svg>
                        <a href="https://myskill.id" target="_blank">https://myskill.id</a>
                    </div>
                </div>

                <div class="about-section">
                    <h2 class="section-title">ABOUT US</h2>
                    <p class="about-text">
                        MySkill is a leading Indonesian e-learning platform dedicated to helping individuals develop practical skills for the digital economy. With a wide range of courses in areas such as programming, digital marketing, graphic design, and business, MySkill empowers learners to enhance their professional capabilities and stay competitive in the global job market.
                    </p>
                    <p class="about-text" style="margin-top: 16px;">
                        Through interactive lessons, expert instructors, and hands-on projects, MySkill provides learners with the knowledge and tools needed to succeed in remote work and international career opportunities. The platform is committed to making high-quality education accessible, practical, and relevant for learners at every stage of their career.
                    </p>
                </div>
            </div>
        </section>

        <section class="courses-section">
  <h2 class="section-title">Jobs</h2>

  <div class="content-wrapper">
    <div class="job-list">

      <!-- Job Card 1 -->
      <div class="job-card">
        <div class="job-details">
          <p class="time-ago">5 hours ago</p>
          <div class="company-logo-info">
            <div class="logo-box" style="background-color: #4B0082;"></div>
            <div>
              <h3 class="job-company-title">TenTwenty</h3>
              <p class="job-role">UI/UX Designer</p>
            </div>
          </div>
        </div>
        <div class="job-meta">
          <div class="job-info">
            <p class="salary-range">$50k-$80k</p>
            <div class="job-tags">
              <span class="tag">Apply via External Website</span>
              <span class="tag">Remote</span>
              <span class="tag">Asian Only</span>
              <span class="tag">Internship</span>
            </div>
          </div>
          <button class="bookmark-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
            </svg>
          </button>
        </div>
      </div>

      <!-- Job Card 2 -->
      <div class="job-card">
        <div class="job-details">
          <p class="time-ago">5 hours ago</p>
          <div class="company-logo-info">
            <div class="logo-box" style="background-color: #E63946;"></div>
            <div>
              <h3 class="job-company-title">Gao Tek Inc.</h3>
              <p class="job-role">UI/UX Designer</p>
            </div>
          </div>
        </div>
        <div class="job-meta">
          <div class="job-info">
            <p class="salary-range">$50k-$80k</p>
            <div class="job-tags">
              <span class="tag">Apply via External Website</span>
              <span class="tag">Remote</span>
              <span class="tag">Asian Only</span>
              <span class="tag">Internship</span>
            </div>
          </div>
          <button class="bookmark-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
            </svg>
          </button>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
document.querySelectorAll('.bookmark-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    btn.classList.toggle('active');
  });
});
</script>

    </section>
</body>
</html>