<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add New Academy</title>
  <link rel="stylesheet" href="../css/addjob.css" />
</head>
<body>
  <div class="container2">
    <h1>Add New Academy</h1>

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
  <div class="right-buttons">
    <button class="btn btn-save" id="saveBtn">Save</button>
    <a href="utama.php?page=addcourse" class="btn btn-add">Add course</a>
  </div>
</div>

<style>
.button-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 20px;
}

.right-buttons {
  display: flex;
  gap: 10px;
}

.btn {
  padding: 10px 18px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-weight: 500;
  transition: 0.3s;
}

.btn-save {
  background-color: #007bff;
  color: white;
}

.btn-save:hover {
  background-color: #0069d9;
  color: white;
}

.btn-add {
  background-color: #28a745; /* hijau */
  color: white;
}

.btn-add:hover {
  background-color: #218838;
  color: white;
}
</style>

    </div>

    </div>
  </div>

</body>
</html>