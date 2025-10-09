<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Job Categories</title>
  <link rel="stylesheet" href="../css/addjob.css" />
  <style>
    .apply-btn {
      padding: 10px 20px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      font-weight: 600;
      transition: 0.3s;
    }
    .apply-btn:hover {
      background: #0056b3;
    }
    .job-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    .job-table th, .job-table td {
      padding: 15px;
      border-bottom: 1px solid #e0e0e0;
      text-align: left;
      font-size: 15px;
      color: #333;
    }
    .job-table th {
      background-color: #007bff;
      color: #fff;
      text-transform: uppercase;
      font-weight: 600;
      letter-spacing: 0.5px;
    }
    .job-table tbody tr:hover {
      background-color: #f7f7f7;
      transition: 0.2s ease;
    }
  </style>
</head>
<body>
  <div class="container2">
    <h1>Job Categories</h1>

    <div class="search-and-add">
      <div class="action-bar">
        <div class="bulk-actions">
          <input type="checkbox" id="selectAllTop" class="select-all-checkbox" style="display:none;">
          <label for="selectAllTop" id="selectAllLabel" style="display:none;">Select All</label>
          <select id="bulkAction">
            <option value="">Bulk Action</option>
            <option value="delete">Delete Selected</option>
            <option value="active">Set Active</option>
            <option value="inactive">Set Inactive</option>
          </select>
          <button id="applyActionBtn" class="apply-btn">Apply</button>
        </div>
      </div>
      <a href="utama.php?page=categoryadd" class="add-new-job-btn">+ Add New Category</a>
    </div>

    <table class="job-table">
      <thead>
        <tr>
          <th>No</th>
          <th>Category</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <input type="checkbox" class="job-checkbox" data-job-id="1" style="display:none;">
            <span class="row-number">1</span>
          </td>
          <td>UI/UX Design</td>
          <td><button class="btn-edit" onclick="window.location.href='utama.php?page=categoryedit'">Edit</button></td>
        </tr>
        <tr>
          <td>
            <input type="checkbox" class="job-checkbox" data-job-id="2" style="display:none;">
            <span class="row-number">2</span>
          </td>
          <td>Frontend Development</td>
          <td><button class="btn-edit" onclick="window.location.href='utama.php?page=categoryedit'">Edit</button></td>
        </tr>
        <tr>
          <td>
            <input type="checkbox" class="job-checkbox" data-job-id="3" style="display:none;">
            <span class="row-number">3</span>
          </td>
          <td>Backend Development</td>
          <td><button class="btn-edit" onclick="window.location.href='utama.php?page=categoryedit'">Edit</button></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Delete Modal -->
  <div class="action-modal" id="deleteModal">
    <div class="action-modal-content">
      <h3>Delete Selected Categories?</h3>
      <p>Are you sure you want to permanently delete <span id="deleteCount">0</span> selected category(ies)?</p>
      <div class="action-modal-actions">
        <button id="confirmDelete" class="confirm-btn">Yes, Delete</button>
        <button id="cancelDelete" class="cancel-btn">Cancel</button>
      </div>
    </div>
  </div>

  <!-- Active Modal -->
  <div class="action-modal" id="activeModal">
    <div class="action-modal-content">
      <h3>Set Categories to Active?</h3>
      <p>Are you sure you want to set <span id="activeCount">0</span> selected category(ies) to active?</p>
      <div class="action-modal-actions">
        <button id="confirmActive" class="confirm-btn">Yes, Set Active</button>
        <button id="cancelActive" class="cancel-btn">Cancel</button>
      </div>
    </div>
  </div>

  <!-- Inactive Modal -->
  <div class="action-modal" id="inactiveModal">
    <div class="action-modal-content">
      <h3>Set Categories to Inactive?</h3>
      <p>Are you sure you want to set <span id="inactiveCount">0</span> selected category(ies) to inactive?</p>
      <div class="action-modal-actions">
        <button id="confirmInactive" class="confirm-btn">Yes, Set Inactive</button>
        <button id="cancelInactive" class="cancel-btn">Cancel</button>
      </div>
    </div>
  </div>

  <script>
    // ========================== BULK ACTION HANDLING ==========================
    const bulkActionSelect = document.getElementById('bulkAction');
    const selectAllCheckbox = document.getElementById('selectAllTop');
    const selectAllLabel = document.getElementById('selectAllLabel');
    const applyActionBtn = document.getElementById('applyActionBtn');
    const jobCheckboxes = document.querySelectorAll('.job-checkbox');

    // Modals
    const deleteModal = document.getElementById('deleteModal');
    const activeModal = document.getElementById('activeModal');
    const inactiveModal = document.getElementById('inactiveModal');

    // Modal Buttons
    const confirmDelete = document.getElementById('confirmDelete');
    const cancelDelete = document.getElementById('cancelDelete');
    const confirmActive = document.getElementById('confirmActive');
    const cancelActive = document.getElementById('cancelActive');
    const confirmInactive = document.getElementById('confirmInactive');
    const cancelInactive = document.getElementById('cancelInactive');

    // Show checkboxes when selecting an action
    bulkActionSelect.addEventListener('change', function() {
      if (this.value !== '') {
        selectAllCheckbox.style.display = 'inline-block';
        selectAllLabel.style.display = 'inline-block';
        jobCheckboxes.forEach(checkbox => {
          checkbox.style.display = 'inline-block';
        });
      } else {
        hideCheckboxes();
      }
    });

    function hideCheckboxes() {
      selectAllCheckbox.style.display = 'none';
      selectAllLabel.style.display = 'none';
      selectAllCheckbox.checked = false;
      jobCheckboxes.forEach(cb => {
        cb.style.display = 'none';
        cb.checked = false;
      });
    }

    // Select all toggle
    selectAllCheckbox.addEventListener('change', function() {
      jobCheckboxes.forEach(cb => cb.checked = this.checked);
    });

    // Get selected IDs
    function getSelectedJobs() {
      return Array.from(jobCheckboxes)
        .filter(cb => cb.checked)
        .map(cb => cb.getAttribute('data-job-id'));
    }

    // Apply action button handler
    applyActionBtn.addEventListener('click', function() {
      const action = bulkActionSelect.value;
      const selected = getSelectedJobs();
      if (!action) return alert('Please select an action first.');
      if (selected.length === 0) return alert('Please select at least one category.');

      const count = selected.length;
      if (action === 'delete') {
        document.getElementById('deleteCount').textContent = count;
        deleteModal.style.display = 'flex';
      } else if (action === 'active') {
        document.getElementById('activeCount').textContent = count;
        activeModal.style.display = 'flex';
      } else if (action === 'inactive') {
        document.getElementById('inactiveCount').textContent = count;
        inactiveModal.style.display = 'flex';
      }
    });

    // Confirm and cancel actions
    confirmDelete.addEventListener('click', () => {
      console.log("Deleting jobs...");
      deleteModal.style.display = 'none';
      resetBulkAction();
    });
    cancelDelete.addEventListener('click', () => deleteModal.style.display = 'none');

    confirmActive.addEventListener('click', () => {
      console.log("Activating jobs...");
      activeModal.style.display = 'none';
      resetBulkAction();
    });
    cancelActive.addEventListener('click', () => activeModal.style.display = 'none');

    confirmInactive.addEventListener('click', () => {
      console.log("Deactivating jobs...");
      inactiveModal.style.display = 'none';
      resetBulkAction();
    });
    cancelInactive.addEventListener('click', () => inactiveModal.style.display = 'none');

    // Close modal when clicking outside
    window.addEventListener('click', (e) => {
      if (e.target === deleteModal) deleteModal.style.display = 'none';
      if (e.target === activeModal) activeModal.style.display = 'none';
      if (e.target === inactiveModal) inactiveModal.style.display = 'none';
    });

    function resetBulkAction() {
      bulkActionSelect.value = '';
      hideCheckboxes();
    }
  </script>
</body>
</html>
