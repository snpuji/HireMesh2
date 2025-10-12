<!-- Find Jobs Page -->
<link rel="stylesheet" href="css/findjob.css" />

<section class="findjobs-section">
    <div class="container">
        
<!-- Search Bar dengan Filter Button (Mobile & Tablet) -->
<div class="search-filter-bar">
    <div class="search-wrapper">
        <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="11" cy="11" r="8"></circle>
            <path d="m21 21-4.35-4.35"></path>
        </svg>
        <input type="text" class="search-input" id="searchInput" placeholder="Search jobs, companies...">
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
  <div class="job-list" id="jobList">
    <!-- Loading State -->
    <div id="loadingState" style="text-align: center; padding: 40px;">
      <p style="color: #666; font-size: 16px;">Loading jobs...</p>
    </div>
    
    <!-- Jobs will be dynamically loaded here -->
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
                <div class="filter-group" id="categoryFilters">
                    <!-- Categories will be dynamically loaded -->
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
                    <label><input type="checkbox" class="job-type-filter" value="full_time"> Full-time</label>
                    <label><input type="checkbox" class="job-type-filter" value="part_time"> Part-time</label>
                    <label><input type="checkbox" class="job-type-filter" value="contract"> Contract</label>
                    <label><input type="checkbox" class="job-type-filter" value="freelance"> Freelance</label>
                    <label><input type="checkbox" class="job-type-filter" value="internship"> Internship</label>
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
                    <input type="number" id="salaryMin" placeholder="Min" />
                    <span>-</span>
                    <input type="number" id="salaryMax" placeholder="Max" />
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
                    <div class="filter-group" id="categoryFiltersMobile">
                        <!-- Categories will be dynamically loaded -->
                    </div>
                </div>

                <div class="filter-section">
                    <h3>Job Types</h3>
                    <div class="filter-group">
                        <label><input type="checkbox" class="job-type-filter-mobile" value="full_time"> Full-time</label>
                        <label><input type="checkbox" class="job-type-filter-mobile" value="part_time"> Part-time</label>
                        <label><input type="checkbox" class="job-type-filter-mobile" value="contract"> Contract</label>
                        <label><input type="checkbox" class="job-type-filter-mobile" value="freelance"> Freelance</label>
                        <label><input type="checkbox" class="job-type-filter-mobile" value="internship"> Internship</label>
                    </div>
                </div>

                <div class="filter-section">
                    <h3>Salary</h3>
                    <div class="salary-range">
                        <input type="number" id="salaryMinMobile" placeholder="Min" />
                        <span>-</span>
                        <input type="number" id="salaryMaxMobile" placeholder="Max" />
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Global variables
    let allJobs = [];
    let filteredJobs = [];
    
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
    const searchInput = document.getElementById('searchInput');
    const jobList = document.getElementById('jobList');
    const loadingState = document.getElementById('loadingState');

    // Fetch jobs from API
    async function fetchJobs() {
        try {
            loadingState.style.display = 'block';
            const response = await fetch('https://remotive.com/api/remote-jobs');
            const data = await response.json();
            allJobs = data.jobs || [];
            filteredJobs = [...allJobs];
            
            // Extract unique categories
            extractCategories();
            
            // Display jobs
            displayJobs(filteredJobs);
            loadingState.style.display = 'none';
        } catch (error) {
            console.error('Error fetching jobs:', error);
            loadingState.innerHTML = '<p style="color: #ff0000;">Failed to load jobs. Please try again later.</p>';
        }
    }

    // Extract unique categories from jobs
    function extractCategories() {
        const categories = new Set();
        allJobs.forEach(job => {
            if (job.category) {
                categories.add(job.category);
            }
        });

        const categoryFilters = document.getElementById('categoryFilters');
        const categoryFiltersMobile = document.getElementById('categoryFiltersMobile');
        
        let categoryHTML = '';
        categories.forEach(category => {
            categoryHTML += `<label><input type="checkbox" class="category-filter" value="${category}"> ${category}</label>`;
        });

        categoryFilters.innerHTML = categoryHTML;
        categoryFiltersMobile.innerHTML = categoryHTML;
    }

    // Calculate time ago
    function timeAgo(dateString) {
        const date = new Date(dateString);
        const now = new Date();
        const seconds = Math.floor((now - date) / 1000);
        
        const intervals = {
            year: 31536000,
            month: 2592000,
            week: 604800,
            day: 86400,
            hour: 3600,
            minute: 60
        };

        for (const [name, seconds_in_interval] of Object.entries(intervals)) {
            const interval = Math.floor(seconds / seconds_in_interval);
            if (interval >= 1) {
                return interval === 1 ? `1 ${name} ago` : `${interval} ${name}s ago`;
            }
        }
        return 'Just now';
    }

    // Generate random color for logo
    function getRandomColor() {
        const colors = ['#4B0082', '#E63946', '#F77F00', '#06A77D', '#3A86FF', '#8338EC', '#FF006E'];
        return colors[Math.floor(Math.random() * colors.length)];
    }

    // Format salary
    function formatSalary(salary) {
        if (!salary || salary.toLowerCase() === 'n/a') {
            return 'Competitive';
        }
        return salary;
    }

    // Get job type badge
    function getJobTypeBadge(jobType) {
        const typeMap = {
            'full_time': 'Full-time',
            'part_time': 'Part-time',
            'contract': 'Contract',
            'freelance': 'Freelance',
            'internship': 'Internship'
        };
        return typeMap[jobType] || jobType;
    }

    // Display jobs
    function displayJobs(jobs) {
        if (jobs.length === 0) {
            jobList.innerHTML = '<div style="text-align: center; padding: 40px;"><p style="color: #666;">No jobs found matching your criteria.</p></div>';
            return;
        }

        let jobsHTML = '';
        jobs.forEach(job => {
            const logoColor = getRandomColor();
            const timePosted = timeAgo(job.publication_date);
            const salary = formatSalary(job.salary);
            const tags = job.tags || [];
            const jobType = getJobTypeBadge(job.job_type);
            
            // Get company logo or use colored box
            const logoHTML = job.company_logo && job.company_logo !== 'https://remotive.com/job/' + job.id + '/logo'
                ? `<img src="${job.company_logo}" alt="${job.company_name}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;" onerror="this.style.display='none'; this.parentElement.style.backgroundColor='${logoColor}'">`
                : '';

            jobsHTML += `
            <a href="${job.url}" target="_blank" class="job-card-link">
                <div class="job-card">
                    <div class="job-details">
                        <p class="time-ago">${timePosted}</p>
                        <div class="company-logo-info">
                            <div class="logo-box" style="background-color: ${logoColor};">
                                ${logoHTML}
                            </div>
                            <div>
                                <h3 class="job-company-title">${job.company_name}</h3>
                                <p class="job-role">${job.title}</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-meta">
                        <div class="job-info">
                            <p class="salary-range">${salary}</p>
                            <div class="job-tags">
                                <span class="tag">${jobType}</span>
                                ${job.candidate_required_location ? `<span class="tag">${job.candidate_required_location}</span>` : ''}
                                ${tags.slice(0, 2).map(tag => `<span class="tag">${tag}</span>`).join('')}
                            </div>
                        </div>
                        <button class="bookmark-btn" onclick="event.preventDefault(); event.stopPropagation(); this.classList.toggle('active');">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </a>`;
        });

        jobList.innerHTML = jobsHTML;
    }

    // Filter jobs
    function filterJobs() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategories = Array.from(document.querySelectorAll('.category-filter:checked')).map(cb => cb.value);
        const selectedJobTypes = Array.from(document.querySelectorAll('.job-type-filter:checked, .job-type-filter-mobile:checked')).map(cb => cb.value);
        const salaryMin = parseInt(document.getElementById('salaryMin').value) || 0;
        const salaryMax = parseInt(document.getElementById('salaryMax').value) || Infinity;

        filteredJobs = allJobs.filter(job => {
            // Search filter
            const matchesSearch = !searchTerm || 
                job.title.toLowerCase().includes(searchTerm) ||
                job.company_name.toLowerCase().includes(searchTerm) ||
                (job.category && job.category.toLowerCase().includes(searchTerm));

            // Category filter
            const matchesCategory = selectedCategories.length === 0 || selectedCategories.includes(job.category);

            // Job type filter
            const matchesJobType = selectedJobTypes.length === 0 || selectedJobTypes.includes(job.job_type);

            // Salary filter (simplified - you may need to adjust based on salary format)
            const matchesSalary = true; // Implement if needed based on salary parsing

            return matchesSearch && matchesCategory && matchesJobType && matchesSalary;
        });

        displayJobs(filteredJobs);
    }

    // Search functionality
    if (searchInput) {
        searchInput.addEventListener('input', filterJobs);
    }

    // === TOGGLE FILTER (Desktop vs Mobile) ===
    if (filterToggleBtn) {
        filterToggleBtn.addEventListener('click', function (e) {
            e.preventDefault();
            if (window.innerWidth >= 1025) {
                desktopFilterSidebar.classList.toggle('active');
                findJobsSection.classList.toggle('sidebar-active');
            } else {
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
            e.preventDefault();
            filterJobs();

            if (window.innerWidth < 1025) {
                closeMobilePopup();
            }
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
            document.getElementById('salaryMin').value = '';
            document.getElementById('salaryMax').value = '';
            document.getElementById('salaryMinMobile').value = '';
            document.getElementById('salaryMaxMobile').value = '';

            // Reset search
            searchInput.value = '';

            // Show all jobs
            filteredJobs = [...allJobs];
            displayJobs(filteredJobs);
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

    // Load jobs on page load
    fetchJobs();
});
</script>