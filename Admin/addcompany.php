<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add New Company</title>
  <link rel="stylesheet" href="../css/addjob.css" />
</head>
<body>
  <div class="container2">
    <h1>Add New Company</h1>

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
        <a href="utama.php?page=company" class="btn btn-cancel">Cancel</a>
        <button class="btn" id="nextBtn">Save</button>
      </div>
    </div>

    </div>
  </div>

</body>
</html>