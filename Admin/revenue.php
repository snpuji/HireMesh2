<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Revenue Management</title>
  <link rel="stylesheet" href="../css/addjob.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/revenue.css" />
</head>
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
    <h1>Revenue</h1>

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

    <!-- Tabs -->
    <div class="revenue-tabs">
      <button class="revenue-tab active" data-tab="external">External</button>
      <button class="revenue-tab" data-tab="internal">Internal</button>
    </div>

    <!-- External Tab Content -->
    <div id="external" class="tab-content active">
      <table class="job-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Voucher Code</th>
            <th>Partner</th>
            <th>Apply Date</th>
            <th>Status</th>
            <th>Revenue</th>
            <th>Notes</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <input type="checkbox" class="job-checkbox external-checkbox" data-job-id="V1" style="display:none;">
              <span class="row-number">V1</span>
            </td>
            <td>Andi Pratama</td>
            <td>andi24@gmail.com</td>
            <td>MYSKILLFREEPASS</td>
            <td>MySkill</td>
            <td>2025-09-21</td>
            <td>
              <div class="status-container">
                <div id="statusBadge" class="status-badge status-pending" onclick="toggleDropdown()">
                    Pending 
                </div>
                <div id="statusDropdown" class="status-dropdown hidden">
                    <div onclick="changeStatus('pending')">Pending</div>
                    <div onclick="changeStatus('paid')">Paid</div>
                    <div onclick="changeStatus('cancel')">Cancel</div>
                </div>
                </div>

            </td>
            <td>Rp. 25.000</td>
            <td>Diverifikasi batch September</td>
            <td><button class="btn-edit" onclick="window.location.href='utama.php?page=revenueedit'">Receipt</button></td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" class="job-checkbox external-checkbox" data-job-id="V2" style="display:none;">
              <span class="row-number">V2</span>
            </td>
            <td>Jessy</td>
            <td>jessy@gmail.com</td>
            <td>UDEMYCLASS2025</td>
            <td>Udemy</td>
            <td>2025-09-19</td>
            <td>
              <div class="status-container">
                <div id="statusBadge" class="status-badge status-pending" onclick="toggleDropdown()">
                    Pending 
                </div>
                <div id="statusDropdown" class="status-dropdown hidden">
                    <div onclick="changeStatus('pending')">Pending</div>
                    <div onclick="changeStatus('paid')">Paid</div>
                    <div onclick="changeStatus('cancel')">Cancel</div>
                </div>
                </div>
            </td>
            <td>Rp.0</td>
            <td>Menunggu laporan Udemy</td>
            <td><button class="btn-edit" onclick="window.location.href='utama.php?page=revenueedit'">Receipt</button></td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" class="job-checkbox external-checkbox" data-job-id="V3" style="display:none;">
              <span class="row-number">V3</span>
            </td>
            <td>Desita</td>
            <td>desita@gmail.com</td>
            <td>DIGISKOLAACCESS</td>
            <td>Digital Skola</td>
            <td>2025-09-15</td>
            <td>
              <div class="status-container">
                <div id="statusBadge" class="status-badge status-pending" onclick="toggleDropdown()">
                    Pending 
                </div>
                <div id="statusDropdown" class="status-dropdown hidden">
                    <div onclick="changeStatus('pending')">Pending</div>
                    <div onclick="changeStatus('paid')">Paid</div>
                    <div onclick="changeStatus('cancel')">Cancel</div>
                </div>
                </div>
            </td>
            <td>Rp. 10.000</td>
            <td>Voucher kelas Data Analytics</td>
            <td><button class="btn-edit" onclick="window.location.href='utama.php?page=revenueedit'">Receipt</button></td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" class="job-checkbox external-checkbox" data-job-id="V4" style="display:none;">
              <span class="row-number">V4</span>
            </td>
            <td>Fransisco</td>
            <td>fransis@gmail.com</td>
            <td>ETLANGBOOST</td>
            <td>English Today</td>
            <td>2025-09-10</td>
            <td>
              <div class="status-container">
                <div id="statusBadge" class="status-badge status-pending" onclick="toggleDropdown()">
                    Pending 
                </div>
                <div id="statusDropdown" class="status-dropdown hidden">
                    <div onclick="changeStatus('pending')">Pending</div>
                    <div onclick="changeStatus('paid')">Paid</div>
                    <div onclick="changeStatus('cancel')">Cancel</div>
                </div>
                </div>
            </td>
            <td>Rp.0</td>
            <td>Menunggu laporan ET</td>
            <td><button class="btn-edit" onclick="window.location.href='utama.php?page=revenueedit'">Receipt</button></td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" class="job-checkbox external-checkbox" data-job-id="V5" style="display:none;">
              <span class="row-number">V5</span>
            </td>
            <td>Wednes</td>
            <td>wedn3@gmail.com</td>
            <td>MYSKILLFREEPASS</td>
            <td>MySkill</td>
            <td>2025-09-07</td>
            <td>
              <div class="status-container">
                <div id="statusBadge" class="status-badge status-pending" onclick="toggleDropdown()">
                    Pending 
                </div>
                <div id="statusDropdown" class="status-dropdown hidden">
                    <div onclick="changeStatus('pending')">Pending</div>
                    <div onclick="changeStatus('paid')">Paid</div>
                    <div onclick="changeStatus('cancel')">Cancel</div>
                </div>
                </div>
            </td>
            <td>Rp. 25.000</td>
            <td>Diverifikasi batch awal September</td>
            <td><button class="btn-edit" onclick="window.location.href='utama.php?page=revenueedit'">Receipt</button></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Internal Tab Content -->
    <div id="internal" class="tab-content">
      <table class="job-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Course Id</th>
            <th>Email</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Revenue</th>
            <th>Payment Method</th>
            <th>Payment Proof</th>
            <th>Apply Date</th>
            <th>Verified Date</th>
            <th>Status</th>
            <th>Notes</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <input type="checkbox" class="job-checkbox internal-checkbox" data-job-id="V1" style="display:none;">
              <span class="row-number">V1</span>
            </td>
            <td>Andi Pratama</td>
            <td>C1</td>
            <td>andi24@gmail.com</td>
            <td>Rp.100.000</td>
            <td>10%</td>
            <td>Rp. 90.000</td>
            <td>Dana</td>
            <td>proof.png</td>
            <td>2025-09-21</td>
            <td>2025-09-21</td>
            <td>
              <div class="status-container">
                <div id="statusBadge" class="status-badge status-pending" onclick="toggleDropdown()">
                    Pending 
                </div>
                <div id="statusDropdown" class="status-dropdown hidden">
                    <div onclick="changeStatus('pending')">Pending</div>
                    <div onclick="changeStatus('paid')">Paid</div>
                    <div onclick="changeStatus('cancel')">Cancel</div>
                </div>
                </div>
            </td>
            <td></td>
            <td><button class="btn-edit" onclick="window.location.href='utama.php?page=revenueedit'">Receipt</button></td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" class="job-checkbox internal-checkbox" data-job-id="V2" style="display:none;">
              <span class="row-number">V2</span>
            </td>
            <td>Jessy</td>
            <td>C2</td>
            <td>jessy@gmail.com</td>
            <td>Rp.100.000</td>
            <td>10%</td>
            <td>Rp. 90.000</td>
            <td>Dana</td>
            <td>proof.png</td>
            <td>2025-09-19</td>
            <td>2025-09-19</td>
            <td>
              <div class="status-container">
                <div id="statusBadge" class="status-badge status-pending" onclick="toggleDropdown()">
                    Pending 
                </div>
                <div id="statusDropdown" class="status-dropdown hidden">
                    <div onclick="changeStatus('pending')">Pending</div>
                    <div onclick="changeStatus('paid')">Paid</div>
                    <div onclick="changeStatus('cancel')">Cancel</div>
                </div>
                </div>
            </td>
            <td></td>
            <td><button class="btn-edit" onclick="window.location.href='utama.php?page=revenueedit'">Receipt</button></td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" class="job-checkbox internal-checkbox" data-job-id="V3" style="display:none;">
              <span class="row-number">V3</span>
            </td>
            <td>Desita</td>
            <td>C3</td>
            <td>desita@gmail.com</td>
            <td>Rp.100.000</td>
            <td>10%</td>
            <td>Rp. 90.000</td>
            <td>BCA</td>
            <td>proof.png</td>
            <td>2025-09-15</td>
            <td>2025-09-15</td>
            <td>
              <div class="status-container">
                <div id="statusBadge" class="status-badge status-pending" onclick="toggleDropdown()">
                    Pending 
                </div>
                <div id="statusDropdown" class="status-dropdown hidden">
                    <div onclick="changeStatus('pending')">Pending</div>
                    <div onclick="changeStatus('paid')">Paid</div>
                    <div onclick="changeStatus('cancel')">Cancel</div>
                </div>
                </div>
            </td>
            <td></td>
            <td><button class="btn-edit" onclick="window.location.href='utama.php?page=revenueedit'">Receipt</button></td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" class="job-checkbox internal-checkbox" data-job-id="V4" style="display:none;">
              <span class="row-number">V4</span>
            </td>
            <td>Fransisco</td>
            <td>C4</td>
            <td>fransis@gmail.com</td>
            <td>Rp.100.000</td>
            <td>10%</td>
            <td>Rp. 90.000</td>
            <td>BCA</td>
            <td>proof.png</td>
            <td>2025-09-10</td>
            <td>2025-09-10</td>
            <td>
              <div class="status-container">
                <div id="statusBadge" class="status-badge status-pending" onclick="toggleDropdown()">
                    Pending 
                </div>
                <div id="statusDropdown" class="status-dropdown hidden">
                    <div onclick="changeStatus('pending')">Pending</div>
                    <div onclick="changeStatus('paid')">Paid</div>
                    <div onclick="changeStatus('cancel')">Cancel</div>
                </div>
                </div>
            </td>
            <td></td>
            <td><button class="btn-edit" onclick="window.location.href='utama.php?page=revenueedit'">Receipt</button></td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" class="job-checkbox internal-checkbox" data-job-id="V5" style="display:none;">
              <span class="row-number">V5</span>
            </td>
            <td>Wednes</td>
            <td>C5</td>
            <td>wedn3@gmail.com</td>
            <td>Rp.100.000</td>
            <td>10%</td>
            <td>Rp. 90.000</td>
            <td>BCA</td>
            <td>proof.png</td>
            <td>2025-09-07</td>
            <td>2025-09-07</td>
            <td>
              <div class="status-container">
                <div id="statusBadge" class="status-badge status-pending" onclick="toggleDropdown()">
                    Pending 
                </div>
                <div id="statusDropdown" class="status-dropdown hidden">
                    <div onclick="changeStatus('pending')">Pending</div>
                    <div onclick="changeStatus('paid')">Paid</div>
                    <div onclick="changeStatus('cancel')">Cancel</div>
                </div>
                </div>
            </td>
            <td></td>
            <td><button class="btn-edit" onclick="window.location.href='utama.php?page=revenueedit'">Receipt</button></td>
          </tr>
        </tbody>
      </table>
    </div>
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