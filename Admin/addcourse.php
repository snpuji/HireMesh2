<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add New Job</title>
  <link rel="stylesheet" href="../css/addjob.css" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>
  <div class="container2">
    <h1>Add New Academy</h1>

    <!-- STEP 1: Academy INFO -->
    <div id="step1" class="form-section active">
      <h2>Academy Information</h2>
      <div class="form-group">
  <label>Academy Name</label>
  <select id="AcademyName" class="form-input" style="width: 100%;">
    <option value="" disabled selected>-- Select Academy --</option>
    <option value="Design Academy">Design Academy</option>
    <option value="CodeLab">CodeLab</option>
    <option value="Marketing School">Marketing School</option>
    <option value="Business Hub">Business Hub</option>
  </select>
</div>

<script>
  $(document).ready(function() {
    $('#AcademyName').select2({
      placeholder: "Search or select academy",
      allowClear: true
    });
  });
</script>

<style>
:root {
  --border: #ddd;
  --body-font-family: 'Poppins', sans-serif;
  --body-font-size: 14px;
}

/* Struktur dasar form */
.form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  font-weight: 500;
  margin-bottom: 8px;
  font-family: var(--body-font-family);
  font-size: var(--body-font-size);
}

/* Style umum form input */
.form-input,
.form-input[type="text"],
.form-input[type="file"],
.form-input[type="date"],
.form-input select,
.form-input textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid var(--border);
  border-radius: 6px;
  font-family: var(--body-font-family);
  font-size: var(--body-font-size);
  background-color: #f9f9f9;
  transition: border-color 0.2s, box-shadow 0.2s;
}

/* Hover dan focus */
.form-input:focus,
.select2-container--default .select2-selection--single:focus {
  border-color: #007bff;
  box-shadow: 0 0 3px rgba(0, 123, 255, 0.3);
  outline: none;
}

/* ==== Styling Select2 agar mirip input biasa ==== */
.select2-container--default .select2-selection--single {
  height: 42px;
  background-color: #f9f9f9;
  border: 1px solid var(--border);
  border-radius: 6px;
  display: flex;
  align-items: center;
  font-family: var(--body-font-family);
  font-size: var(--body-font-size);
  transition: border-color 0.2s, box-shadow 0.2s;
}

/* Text di dalam dropdown */
.select2-container--default .select2-selection--single .select2-selection__rendered {
  color: #333;
  padding-left: 10px;
}

/* Icon panah dropdown */
.select2-container--default .select2-selection--single .select2-selection__arrow {
  height: 100%;
  right: 10px;
}

/* Saat dropdown terbuka */
.select2-container--default .select2-selection--single.select2-selection--focus,
.select2-container--default.select2-container--open .select2-selection--single {
  border-color: #007bff;
  box-shadow: 0 0 3px rgba(0, 123, 255, 0.3);
}

/* Dropdown menu */
.select2-dropdown {
  border: 1px solid var(--border);
  border-radius: 6px;
  background-color: #fff;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
}

/* Item di dropdown */
.select2-results__option {
  padding: 8px 12px;
  font-family: var(--body-font-family);
  font-size: var(--body-font-size);
}

/* Saat di-hover */
.select2-results__option--highlighted {
  background-color: #007bff;
  color: #fff;
}
</style>

      <div class="form-group">
        <label>Academy Logo</label>
        <input type="file" id="AcademyLogo" class="form-input">
      </div>
      <div class="form-group">
        <label>Website</label>
        <input type="text" id="AcademyWebsite" class="form-input" placeholder="Enter Academy website">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" id="AcademyEmail" class="form-input" placeholder="Enter Academy email">
      </div>
      <div class="form-group">
        <label>Address</label>
        <textarea id="AcademyAddress" class="form-input" placeholder="Enter Academy address"></textarea>
      </div>

      <div class="button-row">
        <a href="utama.php?page=academy" class="btn btn-cancel">Cancel</a>
        <button class="btn" id="nextBtn">Next →</button>
      </div>
    </div>

    <!-- STEP 2: Course DETAILS -->
    <div id="step2" class="form-section">
      <h2>Course Details</h2>
      <div id="jobContainer"></div>

      <button id="addJobBtn" class="btn">+ Add Another Job</button>

      <div class="button-row">
        <button class="btn-secondary" id="backBtn">← Back</button>
        <button class="btn" id="submitBtn">Submit All</button>
      </div>
    </div>
  </div>

  <script>
    const step1 = document.getElementById("step1");
    const step2 = document.getElementById("step2");
    const nextBtn = document.getElementById("nextBtn");
    const backBtn = document.getElementById("backBtn");
    const addJobBtn = document.getElementById("addJobBtn");
    const jobContainer = document.getElementById("jobContainer");

    let jobCount = 0;

    // Template job form
    function createJobForm() {
      jobCount++;
      const div = document.createElement("div");
      div.classList.add("job-entry");
      div.innerHTML = `
        <h3>Course ${jobCount}</h3>
        <div class="form-group">
          <label>Course Title</label>
          <input type="text" name="CourseTitle[]" class="form-input" placeholder="Enter Course title">
        </div>
        <div class="form-group">
          <label>Category</label>
          <input type="text" name="CourseCategory[]" class="form-input" placeholder="Enter category">
        </div>
        <div class="form-group">
          <label>Location</label>
          <input type="text" name="CourseLocation[]" class="form-input" placeholder="Enter Course location">
        </div>
        <div class="form-group">
          <label>Course Type</label>
          <select name="CourseType[]" class="form-input">
            <option value="">Select type</option>
            <option value="Full Time">Full Time</option>
            <option value="Part Time">Part Time</option>
            <option value="Internship">Internship</option>
          </select>
        </div>
        <div class="form-group">
          <label>Salary</label>
          <input type="text" name="CourseSalary[]" class="form-input" placeholder="Enter salary range">
        </div>
        <div class="form-group">
          <label>Deadline</label>
          <input type="date" name="CourseDeadline[]" class="form-input">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea name="CourseDesc[]" class="form-input" placeholder="Enter Course description"></textarea>
        </div>
        <button type="button" class="btn-remove">Remove</button>
      `;
      div.querySelector(".btn-remove").addEventListener("click", () => {
        div.remove();
      });
      jobContainer.appendChild(div);
    }

    nextBtn.addEventListener("click", () => {
      step1.classList.remove("active");
      step2.classList.add("active");
      if (jobCount === 0) createJobForm();
    });

    backBtn.addEventListener("click", () => {
      step2.classList.remove("active");
      step1.classList.add("active");
    });

    addJobBtn.addEventListener("click", createJobForm);

    document.getElementById("submitBtn").addEventListener("click", () => {
      alert("All jobs submitted successfully!");
      // Nanti bisa diganti dengan fetch() ke backend PHP
    });
  </script>
</body>
</html>