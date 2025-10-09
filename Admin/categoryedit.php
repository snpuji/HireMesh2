

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Category</title>
  <link rel="stylesheet" href="../css/addjob.css" />
</head>
<body>
  <div class="container2">
    <h1>Edit Category</h1>

     <form action="proses_editcategory.php" method="POST">
      <input type="hidden" name="id" value="1">

      <div class="form-group">
        <label>Category Name</label>
        <input type="text" name="category_name" class="form-input" value="UI/UX Design" required>
      </div>

      <div class="button-row">
        <a href="utama.php?page=jobcategory" class="btn-cancel">Cancel</a>
        <button type="submit" class="btn">Update</button>
      </div>
    </form>
  </div>
</body>
</html>
