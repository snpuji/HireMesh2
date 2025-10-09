<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add New Job</title>
  <link rel="stylesheet" href="../css/addjob.css" />
</head>
<body>
  <div class="container2">
    <h1>Add New Job</h1>

    <!-- STEP 1: COMPANY INFO -->
    <div id="step1" class="form-section active">
      <h2>Company Information</h2>
      <div class="form-group">
        <label>Company Name</label>
        <input type="text" id="companyName" class="form-input" placeholder="Enter company name">
      </div>
      <div class="form-group">
        <label>Company Logo</label>
        <input type="file" id="companyLogo" class="form-input">
      </div>
      <div class="form-group">
        <label>Website</label>
        <input type="text" id="companyWebsite" class="form-input" placeholder="Enter company website">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" id="companyEmail" class="form-input" placeholder="Enter company email">
      </div>
      <div class="form-group">
        <label>Address</label>
        <textarea id="companyAddress" class="form-input" placeholder="Enter company address"></textarea>
      </div>

      <div class="button-row">
        <a href="utama.php?page=jobs" class="btn btn-cancel">Cancel</a>
        <button class="btn" id="nextBtn">Next →</button>
      </div>
    </div>

    <!-- STEP 2: JOB DETAILS -->
    <div id="step2" class="form-section">
      <h2>Job Details</h2>
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
        <h3>Job ${jobCount}</h3>
        <div class="form-group">
          <label>Job Title</label>
          <input type="text" name="jobTitle[]" class="form-input" placeholder="Enter job title">
        </div>
        <div class="form-group">
          <label>Category</label>
          <input type="text" name="jobCategory[]" class="form-input" placeholder="Enter category">
        </div>
        <div class="form-group">
          <label>Location</label>
          <input type="text" name="jobLocation[]" class="form-input" placeholder="Enter job location">
        </div>
        <div class="form-group">
          <label>Job Type</label>
          <select name="jobType[]" class="form-input">
            <option value="">Select type</option>
            <option value="Full Time">Full Time</option>
            <option value="Part Time">Part Time</option>
            <option value="Internship">Internship</option>
          </select>
        </div>
        <div class="form-group">
          <label>Salary</label>
          <input type="text" name="jobSalary[]" class="form-input" placeholder="Enter salary range">
        </div>
        <div class="form-group">
          <label>Deadline</label>
          <input type="date" name="jobDeadline[]" class="form-input">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea name="jobDesc[]" class="form-input" placeholder="Enter job description"></textarea>
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