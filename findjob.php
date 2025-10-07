<!-- Find Jobs Page -->
<link rel="stylesheet" href="css/findjob.css" />

<section class="findjobs-section">
    <div class="container">
        
<!-- Cari bagian ini di dalam <section class="findjobs-section"> -->
<!-- Ganti atau tambahkan elemen filter-sidebar dan filter-popup seperti di bawah -->

<!-- Search Bar dengan Filter Button (Mobile & Tablet) -->
<div class="search-filter-bar">
    <div class="search-wrapper">
        <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="11" cy="11" r="8"></circle>
            <path d="m21 21-4.35-4.35"></path>
        </svg>
        <input type="text" class="search-input" placeholder="Search jobs, companies...">
    </div>
    <button class="filter-toggle-btn" id="filterToggleBtn">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="4" y1="6" x2="20" y2="6"></line>
            <line x1="4" y1="12" x2="20" y2="12"></line>
            <line x1="4" y1="18" x2="20" y2="18"></line>
        </svg>
        Filter
    </button>
</div>

<div class="content-wrapper">
  <div class="job-list">

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

    <!-- Desktop Filter Sidebar (Slide-in from right) -->
    <aside class="filter-sidebar" id="desktopFilterSidebar">
        <div class="filter-sidebar-header">
            <h3>Filter Jobs</h3>
            <button class="close-sidebar-btn" id="closeSidebarBtn">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <div class="filter-sidebar-body">
            <div class="filter-section">
                <div class="filter-section-header">
                    <h3>Category</h3>
                    <button class="toggle-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </div>
                <div class="filter-section-content">
                <div class="filter-group">
                    <div class="filter-header">Web & App Development</div>
                    <label><input type="checkbox"> Frontend Developer</label>
                    <label><input type="checkbox"> Backend Developer</label>
                    <label><input type="checkbox"> Mobile App Developer</label>
                    <label><input type="checkbox"> Fullstack Developer</label>
                    <label><input type="checkbox"> Software Engineer</label>
                    <label><input type="checkbox"> QA Tester</label>
                </div>
                <div class="filter-group">
                    <div class="filter-header">Content Creation</div>
                    <label><input type="checkbox"> Copywriter</label>
                    <label><input type="checkbox"> Content Writer</label>
                    <label><input type="checkbox"> SEO Specialist</label>
                </div>
            </div>
        </div>

            <div class="filter-section">
                <div class="filter-section-header">
                    <h3>Job Types</h3>
                    <button class="toggle-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </div>
                <div class="filter-section-content">
                <div class="filter-group">
                    <label><input type="checkbox"> Full-time</label>
                    <label><input type="checkbox"> Part-time</label>
                    <label><input type="checkbox"> Contract</label>
                    <label><input type="checkbox"> Freelance</label>
                    <label><input type="checkbox"> Internship</label>
                </div>
            </div>
        </div>

            <div class="filter-section">
                <div class="filter-section-header">
                    <h3>Salary</h3>
                    <button class="toggle-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </div>
                <div class="filter-section-content">
                <div class="salary-range">
                    <input type="number" placeholder="Min" />
                    <span>-</span>
                    <input type="number" placeholder="Max" />
                </div>
            </div>
        </div>
</div>

        <div class="filter-sidebar-footer">
            <button class="reset-btn">Reset</button>
            <button class="apply-btn">Apply Filters</button>
        </div>
    </aside>
    <!-- Mobile Filter Popup -->
    <div class="filter-popup" id="filterPopup">
        <div class="filter-popup-overlay" id="filterOverlay"></div>
        <div class="filter-popup-content">
            <div class="filter-popup-header">
                <h3>Filter Jobs</h3>
                <button class="close-popup-btn" id="closePopupBtn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>

            <div class="filter-popup-body">
                <div class="filter-section">
                    <h3>Category</h3>
                    <div class="filter-group">
                        <div class="filter-header">Web & App Development</div>
                        <label><input type="checkbox"> Frontend Developer</label>
                        <label><input type="checkbox"> Backend Developer</label>
                        <label><input type="checkbox"> Mobile App Developer</label>
                        <label><input type="checkbox"> Fullstack Developer</label>
                        <label><input type="checkbox"> Software Engineer</label>
                        <label><input type="checkbox"> QA Tester</label>
                    </div>
                    <div class="filter-group">
                        <div class="filter-header">Content Creation</div>
                        <label><input type="checkbox"> Copywriter</label>
                        <label><input type="checkbox"> Content Writer</label>
                        <label><input type="checkbox"> SEO Specialist</label>
                    </div>
                </div>

                <div class="filter-section">
                    <h3>Job Types</h3>
                    <div class="filter-group">
                        <label><input type="checkbox"> Full-time</label>
                        <label><input type="checkbox"> Part-time</label>
                        <label><input type="checkbox"> Contract</label>
                        <label><input type="checkbox"> Freelance</label>
                        <label><input type="checkbox"> Internship</label>
                    </div>
                </div>

                <div class="filter-section">
                    <h3>Salary</h3>
                    <div class="salary-range">
                        <input type="number" placeholder="Min" />
                        <span>-</span>
                        <input type="number" placeholder="Max" />
                    </div>
                </div>
            </div>

            <div class="filter-popup-footer">
                <button class="reset-btn">Reset</button>
                <button class="apply-btn">Apply Filters</button>
            </div>
        </div>
    </div>
</div>
</section>

<style>

</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Elemen utama
    const filterToggleBtn = document.getElementById('filterToggleBtn');
    const desktopFilterSidebar = document.getElementById('desktopFilterSidebar');
    const closeSidebarBtn = document.getElementById('closeSidebarBtn');
    const findJobsSection = document.querySelector('.findjobs-section');

    const filterPopup = document.getElementById('filterPopup');
    const closePopupBtn = document.getElementById('closePopupBtn');
    const filterOverlay = document.getElementById('filterOverlay');

    const applyBtns = document.querySelectorAll('.apply-btn');
    const resetBtns = document.querySelectorAll('.reset-btn');

    // === TOGGLE FILTER (Desktop vs Mobile) ===
    if (filterToggleBtn) {
        filterToggleBtn.addEventListener('click', function (e) {
            e.preventDefault();
            if (window.innerWidth >= 1025) {
                // Desktop: toggle sidebar
                desktopFilterSidebar.classList.toggle('active');
                findJobsSection.classList.toggle('sidebar-active');
            } else {
                // Mobile: buka popup
                filterPopup.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    }

    // === TUTUP SIDEBAR (Desktop) ===
    if (closeSidebarBtn) {
        closeSidebarBtn.addEventListener('click', function () {
            desktopFilterSidebar.classList.remove('active');
            findJobsSection.classList.remove('sidebar-active');
        });
    }

    // === TUTUP POPUP (Mobile) ===
    function closeMobilePopup() {
        filterPopup.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (closePopupBtn) {
        closePopupBtn.addEventListener('click', closeMobilePopup);
    }
    if (filterOverlay) {
        filterOverlay.addEventListener('click', closeMobilePopup);
    }

    // === APPLY FILTERS ===
    applyBtns.forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault(); // Opsional: hindari submit jika di form

            if (window.innerWidth >= 1025) {
                // Desktop: TETAP BUKA sidebar setelah apply
                console.log('Filters applied (Desktop)');
                // JANGAN tutup sidebar!
            } else {
                // Mobile: tutup popup setelah apply
                closeMobilePopup();
                console.log('Filters applied (Mobile)');
            }

            // Di sini kamu bisa tambahkan logika filter (misal: fetch data baru)
        });
    });

    // === RESET FILTERS ===
    resetBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            // Reset semua checkbox
            const checkboxes = document.querySelectorAll(
                '.filter-sidebar-body input[type="checkbox"], .filter-popup-body input[type="checkbox"]'
            );
            checkboxes.forEach(cb => cb.checked = false);

            // Reset input number
            const numberInputs = document.querySelectorAll(
                '.filter-sidebar-body input[type="number"], .filter-popup-body input[type="number"]'
            );
            numberInputs.forEach(input => input.value = '');
        });
    });

    // === TOGGLE SECTION (Category, Job Types, dll) ===
    const toggleButtons = document.querySelectorAll('.toggle-btn');
    toggleButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            e.stopPropagation();
            const section = this.closest('.filter-section');
            section.classList.toggle('active');
        });
    });

    // === BOOKMARK BUTTON ===
    document.querySelectorAll('.bookmark-btn').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            this.classList.toggle('active');
        });
    });
});
</script>