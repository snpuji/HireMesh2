<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Job</title>
  <link rel="stylesheet" href="../css/addjob.css" />
</head>
<body>
  <div class="container2">
    <h1>Edit Job</h1>

    <div class="form-section active">
      <h2>Job Information</h2>

      <div class="form-group">
        <label>Company Name</label>
        <input type="text" id="companyName" class="form-input" value="TenTwenty" readonly>
      </div>

      <div class="form-group">
        <label>Company Logo</label>
        <input type="file" id="companyLogo" class="form-input">
      </div>

      <div class="form-group">
        <label>Job Title</label>
        <input type="text" id="jobTitle" class="form-input" placeholder="Enter job title" value="UI/UX Designer">
      </div>

      <div class="form-group">
        <label>Category</label>
        <input type="text" id="jobCategory" class="form-input" placeholder="Enter category" value="Design">
      </div>

      <div class="form-group">
        <label>Location</label>
        <input type="text" id="jobLocation" class="form-input" placeholder="Enter job location" value="Remote">
      </div>

      <div class="form-group">
        <label>Job Type</label>
        <select id="jobType" class="form-input">
          <option value="">Select type</option>
          <option value="Full Time">Full Time</option>
          <option value="Part Time">Part Time</option>
          <option value="Internship" selected>Internship</option>
        </select>
      </div>

      <div class="form-group">
        <label>Salary</label>
        <input type="text" id="jobSalary" class="form-input" placeholder="Enter salary range" value="$50k - $80k">
      </div>

      <div class="form-group">
        <label>Deadline</label>
        <input type="date" id="jobDeadline" class="form-input" value="2025-12-31">
      </div>

      <div class="form-group">
        <label>Description</label>
        <textarea id="jobDesc" class="form-input" placeholder="Enter job description">We are seeking a talented UI/UX Designer to join our remote team...</textarea>
      </div>

      <div class="button-row">
        <a href="utama.php?page=jobs" class="btn btn-cancel">Cancel</a>
        <button class="btn" id="saveBtn">Save Changes</button>
      </div>
    </div>
  </div>

  <script>
    const saveBtn = document.getElementById("saveBtn");

    saveBtn.addEventListener("click", () => {
      // Di sini nanti bisa ditambahkan fetch() ke backend PHP
      alert("Job details updated successfully!");
      window.location.href = "utama.php?page=jobs";
    });
  </script>
</body>
</html>
