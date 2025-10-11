<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Academy</title>
  <link rel="stylesheet" href="../css/addjob.css" />
</head>
<body>
  <div class="container2">
    <h1>Edit Academy</h1>

    <!-- STEP 1: Academy INFO -->
    <div id="step1" class="form-section active">
      <h2>Academy Information</h2>
      <div class="form-group">
        <label>Academy Name</label>
        <input type="text" id="AcademyName" class="form-input" placeholder="Enter Academy name">
      </div>
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
        <button class="btn" id="nextBtn">Save</button>
      </div>
    </div>

    </div>
  </div>

</body>
</html>