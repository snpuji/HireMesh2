<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User</title>
  <link rel="stylesheet" href="../css/addjob.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/revenue.css" />
</head>
<style>
    /* Tombol utama (Edit) sudah ada, tambahkan tombol Edit di bawah ini */
.btn-edit-secondary {
  background-color: #f0f0f0;
  border: 1px solid #007bff;
  color: #007bff;
  border-radius: 8px;
  padding: 6px 14px;
  cursor: pointer;
  margin-left: 6px; /* kasih jarak dari tombol Edit */
  transition: all 0.3s ease;
  font-size: 14px;
}

.btn-edit-secondary:hover {
  background-color: #007bff;
  color: #fff;
}
/* Container tombol agar sejajar */
td > button {
  display: inline-block;
  vertical-align: middle;
}

/* Tambahkan jarak antar tombol */
.btn-edit,
.btn-edit-secondary {
  margin-bottom: 6px; /* jarak kecil antar tombol */
}

/* Pastikan tombol sejajar rapi */
td {
  white-space: nowrap;
}
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
/* Filter dropdown */
.filter-status {
  padding: 8px 12px;
  border: 1px solid #dcdfe6;
  border-radius: 8px;
  font-size: 14px;
  background-color: #fff;
  color: #333;
  outline: none;
  cursor: pointer;
  transition: 0.2s ease;
}

.filter-status:hover {
  border-color: #3b82f6;
}

/* Biarkan tetap rapi dalam satu baris */
.search-and-add {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.action-bar {
  display: flex;
  align-items: center;
  gap: 10px;
}

.bulk-actions {
  display: flex;
  align-items: center;
  gap: 10px;
}

.apply-btn {
  padding: 8px 16px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background 0.2s ease;
}

.apply-btn:hover {
  background-color: #0056b3;
}

</style>
<body>
  <div class="container2">
    <h1>User</h1>

    <div class="search-and-add">
      <div class="action-bar">
        <div class="bulk-actions">
          <input type="checkbox" id="selectAllTop" class="select-all-checkbox" style="display:none;">
          <label for="selectAllTop" id="selectAllLabel" style="display:none;">Select All</label>
          <!-- ✅ Filter -->
      <select id="filterStatus" class="filter-status">
        <option value="all">All Jobs</option>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
      </select>
          <select id="bulkAction">
            <option value="">Bulk Action</option>
            <option value="delete">Delete Selected</option>
            <option value="paid">Set Paid</option>
            <option value="pending">Set Pending</option>
          </select>
          <button id="applyActionBtn" class="apply-btn">Apply</button>
        </div>
      </div>
    </div>
<!-- External Tab Content -->
<div id="external" class="tab-content active">
  <table class="job-table">
    <thead>
      <tr>
        <th>No</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Location</th>
        <th>Completion %</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <input type="checkbox" class="job-checkbox external-checkbox" data-job-id="V1" style="display:none;">
          <span class="row-number">1</span>
        </td>
        <td>Andi Pratama</td>
        <td>andi24@gmail.com</td>
        <td>08765789232</td>
        <td>Bandung</td>
        <td>100%</td>
        <td>
          <button class="btn-edit" onclick="window.location.href='useredit.php'">Edit</button>
          <button class="btn-edit-secondary" onclick="window.location.href='utama.php?page=userdetail'">Detail</button>
        </td>
      </tr>
      <tr>
        <td>
          <input type="checkbox" class="job-checkbox external-checkbox" data-job-id="V2" style="display:none;">
          <span class="row-number">2</span>
        </td>
        <td>Desita</td>
        <td>desita@gmail.com</td>
        <td>0893456776</td>
        <td>Jakarta</td>
        <td>100%</td>
        <td>
          <button class="btn-edit" onclick="window.location.href='useredit.php'">Edit</button>
          <button class="btn-edit-secondary" onclick="window.location.href='utama.php?page=userdetail'">Detail</button>
        </td>
      </tr>
      <tr>
        <td>
          <input type="checkbox" class="job-checkbox external-checkbox" data-job-id="V3" style="display:none;">
          <span class="row-number">3</span>
        </td>
        <td>Fransisco</td>
        <td>fransis@gmail.com</td>
        <td>0876567890</td>
        <td>Bandung</td>
        <td>100%</td>
        <td>
          <button class="btn-edit" onclick="window.location.href='useredit.php'">Edit</button>
          <button class="btn-edit-secondary" onclick="window.location.href='utama.php?page=userdetail'">Detail</button>
        </td>
      </tr>
      <tr>
        <td>
        </tbody>
      </table>
    </div>

  <!-- Delete Modal -->
  <div class="action-modal" id="deleteModal">
    <div class="action-modal-content">
      <h3>Delete Selected Revenue?</h3>
      <p>Are you sure you want to permanently delete <span id="deleteCount">0</span> selected revenue(s)?</p>
      <div class="action-modal-actions">
        <button id="confirmDelete" class="confirm-btn">Yes, Delete</button>
        <button id="cancelDelete" class="cancel-btn">Cancel</button>
      </div>
    </div>
  </div>

  <!-- Paid Modal -->
  <div class="action-modal" id="paidModal">
    <div class="action-modal-content">
      <h3>Set Revenue to Paid?</h3>
      <p>Are you sure you want to set <span id="paidCount">0</span> selected revenue(s) to paid?</p>
      <div class="action-modal-actions">
        <button id="confirmPaid" class="confirm-btn">Yes, Set Paid</button>
        <button id="cancelPaid" class="cancel-btn">Cancel</button>
      </div>
    </div>
  </div>

  <!-- Pending Modal -->
  <div class="action-modal" id="pendingModal">
    <div class="action-modal-content">
      <h3>Set Revenue to Pending?</h3>
      <p>Are you sure you want to set <span id="pendingCount">0</span> selected revenue(s) to pending?</p>
      <div class="action-modal-actions">
        <button id="confirmPending" class="confirm-btn">Yes, Set Pending</button>
        <button id="cancelPending" class="cancel-btn">Cancel</button>
      </div>
    </div>
  </div>

  <script>
    // ========================== TAB SWITCHING ==========================
    const tabs = document.querySelectorAll('.revenue-tab');
    const tabContents = document.querySelectorAll('.tab-content');
    let currentTab = 'external';

    tabs.forEach(tab => {
      tab.addEventListener('click', function() {
        const tabName = this.getAttribute('data-tab');
        
        // Remove active class from all tabs
        tabs.forEach(t => t.classList.remove('active'));
        
        // Add active class to clicked tab
        this.classList.add('active');
        
        // Hide all tab contents
        tabContents.forEach(content => content.classList.remove('active'));
        
        // Show selected tab content
        document.getElementById(tabName).classList.add('active');
        
        // Update current tab
        currentTab = tabName;
        
        // Reset bulk action when switching tabs
        resetBulkAction();
      });
    });

    // ========================== BULK ACTION HANDLING ==========================
    const bulkActionSelect = document.getElementById('bulkAction');
    const selectAllCheckbox = document.getElementById('selectAllTop');
    const selectAllLabel = document.getElementById('selectAllLabel');
    const applyActionBtn = document.getElementById('applyActionBtn');

    // Modals
    const deleteModal = document.getElementById('deleteModal');
    const paidModal = document.getElementById('paidModal');
    const pendingModal = document.getElementById('pendingModal');

    // Modal Buttons
    const confirmDelete = document.getElementById('confirmDelete');
    const cancelDelete = document.getElementById('cancelDelete');
    const confirmPaid = document.getElementById('confirmPaid');
    const cancelPaid = document.getElementById('cancelPaid');
    const confirmPending = document.getElementById('confirmPending');
    const cancelPending = document.getElementById('cancelPending');

    // Get current tab checkboxes
    function getCurrentTabCheckboxes() {
      if (currentTab === 'external') {
        return document.querySelectorAll('.external-checkbox');
      } else {
        return document.querySelectorAll('.internal-checkbox');
      }
    }

    // Show checkboxes when selecting an action
    bulkActionSelect.addEventListener('change', function() {
      if (this.value !== '') {
        selectAllCheckbox.style.display = 'inline-block';
        selectAllLabel.style.display = 'inline-block';
        
        const checkboxes = getCurrentTabCheckboxes();
        checkboxes.forEach(checkbox => {
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
      
      // Hide all checkboxes
      const allCheckboxes = document.querySelectorAll('.job-checkbox');
      allCheckboxes.forEach(cb => {
        cb.style.display = 'none';
        cb.checked = false;
      });
    }

    // Select all toggle
    selectAllCheckbox.addEventListener('change', function() {
      const checkboxes = getCurrentTabCheckboxes();
      checkboxes.forEach(cb => cb.checked = this.checked);
    });

    // Get selected IDs
    function getSelectedJobs() {
      const checkboxes = getCurrentTabCheckboxes();
      return Array.from(checkboxes)
        .filter(cb => cb.checked)
        .map(cb => cb.getAttribute('data-job-id'));
    }

    // Apply action button handler
    applyActionBtn.addEventListener('click', function() {
      const action = bulkActionSelect.value;
      const selected = getSelectedJobs();
      if (!action) return alert('Please select an action first.');
      if (selected.length === 0) return alert('Please select at least one revenue.');

      const count = selected.length;
      if (action === 'delete') {
        document.getElementById('deleteCount').textContent = count;
        deleteModal.style.display = 'flex';
      } else if (action === 'paid') {
        document.getElementById('paidCount').textContent = count;
        paidModal.style.display = 'flex';
      } else if (action === 'pending') {
        document.getElementById('pendingCount').textContent = count;
        pendingModal.style.display = 'flex';
      }
    });

    // Confirm and cancel actions
    confirmDelete.addEventListener('click', () => {
      console.log("Deleting revenues:", getSelectedJobs());
      deleteModal.style.display = 'none';
      resetBulkAction();
    });
    cancelDelete.addEventListener('click', () => deleteModal.style.display = 'none');

    confirmPaid.addEventListener('click', () => {
      console.log("Setting revenues to paid:", getSelectedJobs());
      paidModal.style.display = 'none';
      resetBulkAction();
    });
    cancelPaid.addEventListener('click', () => paidModal.style.display = 'none');

    confirmPending.addEventListener('click', () => {
      console.log("Setting revenues to pending:", getSelectedJobs());
      pendingModal.style.display = 'none';
      resetBulkAction();
    });
    cancelPending.addEventListener('click', () => pendingModal.style.display = 'none');

    // Close modal when clicking outside
    window.addEventListener('click', (e) => {
      if (e.target === deleteModal) deleteModal.style.display = 'none';
      if (e.target === paidModal) paidModal.style.display = 'none';
      if (e.target === pendingModal) pendingModal.style.display = 'none';
    });

    function resetBulkAction() {
      bulkActionSelect.value = '';
      hideCheckboxes();
    }
  </script>
  <script>
  const statusBadge = document.getElementById('statusBadge');
  const dropdown = document.getElementById('statusDropdown');
  let currentStatus = 'pending';

  function toggleDropdown() {
    dropdown.classList.toggle('hidden');
  }

  function changeStatus(newStatus) {
    if (newStatus === currentStatus) {
      dropdown.classList.add('hidden');
      return;
    }

    const confirmChange = confirm("Are you sure you want to change the status?");
    if (confirmChange) {
      currentStatus = newStatus;
      statusBadge.textContent = newStatus.charAt(0).toUpperCase() + newStatus.slice(1) + " ";

      statusBadge.className = "status-badge status-" + newStatus;
    }

    dropdown.classList.add('hidden');
  }

  // Tutup dropdown kalau klik di luar
  document.addEventListener('click', function(event) {
    if (!event.target.closest('.status-container')) {
      dropdown.classList.add('hidden');
    }
  });
  // === FILTER STATUS ===
document.getElementById('filterStatus').addEventListener('change', function() {
  const selectedFilter = this.value;
  const jobCards = document.querySelectorAll('.job-item'); // pastikan tiap job punya class "job-item"

  jobCards.forEach(card => {
    const status = card.getAttribute('data-status'); // misal data-status="active" atau "inactive"
    if (selectedFilter === 'all' || status === selectedFilter) {
      card.style.display = 'flex'; // tampilkan
    } else {
      card.style.display = 'none'; // sembunyikan
    }
  });
});
</script>

</body>
</html>