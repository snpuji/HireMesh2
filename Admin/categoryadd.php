<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add New Category</title>
  <link rel="stylesheet" href="../css/addjob.css" />
</head>
<body>
  <div class="container2">
    <h1>Add New Category</h1>

    <form action="proses_addcategory.php" method="POST" id="categoryForm">
      <div id="categoryList">
        <div class="job-entry">
          <div class="form-group">
            <label>Category Name</label>
            <input type="text" name="category_name[]" class="form-input" required>
          </div>
          <button type="button" class="btn-remove">Remove</button>
        </div>
      </div>

      <button type="button" class="btn btn-add" id="addMoreBtn">+ Add More Category</button>

      <div class="button-row">
        <a href="utama.php?page=jobcategory" class="btn-cancel">Cancel</a>
        <button type="submit" class="btn">Save</button>
      </div>
    </form>
  </div>

  <script>
    const addMoreBtn = document.getElementById('addMoreBtn');
    const categoryList = document.getElementById('categoryList');

    addMoreBtn.addEventListener('click', () => {
      const entry = document.createElement('div');
      entry.classList.add('job-entry');
      entry.innerHTML = `
        <div class="form-group">
          <label>Category Name</label>
          <input type="text" name="category_name[]" class="form-input" required>
        </div>
        <button type="button" class="btn-remove">Remove</button>
      `;
      categoryList.appendChild(entry);
    });

    categoryList.addEventListener('click', (e) => {
      if (e.target.classList.contains('btn-remove')) {
        e.target.parentElement.remove();
      }
    });
  </script>
</body>
</html>
