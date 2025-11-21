<link rel="stylesheet" href="../css/company.css" />
<style>
/* Additional CSS for better positioning */
.card-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.company-card-wrapper {
    position: relative;
    display: block;
}

.company-card {
    background: white;
    border-radius: 12px;
    padding: 24px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    cursor: pointer;
    position: relative;
}

.company-card:hover {
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    transform: translateY(-2px);
}

.job-actions {
    position: absolute;
    top: 12px;
    right: 12px;
    z-index: 10;
}

.btn-edit {
    background: #4A90E2;
    color: white;
    border: none;
    padding: 6px 16px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 14px;
    transition: background 0.3s ease;
}

.btn-edit:hover {
    background: #357ABD;
}

.job-select {
    position: absolute;
    top: 12px;
    left: 12px;
    z-index: 10;
    cursor: pointer;
    display: none;
    /* PENTING: Perbesar area klik */
    padding: 8px;
    margin: -8px;
}

.job-select.show {
    display: block;
}

.job-checkbox {
    width: 20px;
    height: 20px;
    cursor: pointer;
    accent-color: #4A90E2;
    pointer-events: none; /* CRITICAL: Biar label yang handle click */
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

<div class="container1">
    <div class="content-wrapper1">
        <div class="search-and-add">
            <div class="action-bar">
                <div class="bulk-actions">
                    <input type="checkbox" id="selectAll" class="select-all-checkbox" style="display: none;">
                    <label for="selectAll" id="selectAllLabel" style="display: none;">Select All</label>
                    <!-- ✅ Filter -->
      <select id="filterStatus" class="filter-status">
        <option value="all">All Jobs</option>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
      </select>
                    <select id="bulkAction">
                        <option value="">Bulk Action</option>
                        <option value="delete">Delete Selected</option>
                        <option value="active">Set Active</option>
                        <option value="inactive">Set Inactive</option>
                    </select>
                    <button id="applyActionBtn" class="apply-btn">Apply</button>
                </div>
            </div>
            <a href="utama.php?page=addcompany" class="add-new-job-btn">+ Add New Job</a>
        </div>

        <div class="card-container">
            <!-- Card 1: Gao Tek Inc. -->
            <div class="company-card-wrapper">
                <a href="utama.php?page=previewcompany" class="company-card-link" data-card-link>
                    <div class="company-card">
                        <div class="job-actions">
                            <button class="btn-edit" onclick="event.stopPropagation(); event.preventDefault(); location.href='utama.php?page=editcompany'">Edit</button>
                        </div>
                        <label class="job-select">
                            <input type="checkbox" class="job-checkbox" data-job-id="1">
                        </label>
                        <div class="logo-placeholder"></div>
                        <p class="company-name">Gao Tek Inc.</p>
                        <p class="job-count">5 Jobs</p>
                    </div>
                </a>
            </div>

            <!-- Card 2: TenTwenty -->
            <div class="company-card-wrapper">
                <a href="utama.php?page=previewcompany" class="company-card-link" data-card-link>
                    <div class="company-card">
                        <div class="job-actions">
                            <button class="btn-edit" onclick="event.stopPropagation(); event.preventDefault(); location.href='utama.php?page=editcompany'">Edit</button>
                        </div>
                        <label class="job-select">
                            <input type="checkbox" class="job-checkbox" data-job-id="2">
                        </label>
                        <div class="logo-placeholder"></div>
                        <p class="company-name">TenTwenty</p>
                        <p class="job-count">5 Jobs</p>
                    </div>
                </a>
            </div>

            <!-- Card 3: CleverTqp -->
            <div class="company-card-wrapper">
                <a href="utama.php?page=previewcompany" class="company-card-link" data-card-link>
                    <div class="company-card">
                        <div class="job-actions">
                            <button class="btn-edit" onclick="event.stopPropagation(); event.preventDefault(); location.href='utama.php?page=editcompany'">Edit</button>
                        </div>
                        <label class="job-select">
                            <input type="checkbox" class="job-checkbox" data-job-id="3">
                        </label>
                        <div class="logo-placeholder"></div>
                        <p class="company-name">CleverTqp</p>
                        <p class="job-count">5 Jobs</p>
                    </div>
                </a>
            </div>

            <!-- Card 4: River Spring Lodge -->
            <div class="company-card-wrapper">
                <a href="utama.php?page=previewcompany" class="company-card-link" data-card-link>
                    <div class="company-card">
                        <div class="job-actions">
                            <button class="btn-edit" onclick="event.stopPropagation(); event.preventDefault(); location.href='utama.php?page=editcompany'">Edit</button>
                        </div>
                        <label class="job-select">
                            <input type="checkbox" class="job-checkbox" data-job-id="4">
                        </label>
                        <div class="logo-placeholder"></div>
                        <p class="company-name">River Spring Lodge</p>
                        <p class="job-count">5 Jobs</p>
                    </div>
                </a>
            </div>

            <!-- Card 5: Lemon.io -->
            <div class="company-card-wrapper">
                <a href="utama.php?page=previewcompany" class="company-card-link" data-card-link>
                    <div class="company-card">
                        <div class="job-actions">
                            <button class="btn-edit" onclick="event.stopPropagation(); event.preventDefault(); location.href='utama.php?page=editcompany'">Edit</button>
                        </div>
                        <label class="job-select">
                            <input type="checkbox" class="job-checkbox" data-job-id="5">
                        </label>
                        <div class="logo-placeholder"></div>
                        <p class="company-name">Lemon.io</p>
                        <p class="job-count">5 Jobs</p>
                    </div>
                </a>
            </div>

            <!-- Card 6: Lemon.io -->
            <div class="company-card-wrapper">
                <a href="utama.php?page=previewcompany" class="company-card-link" data-card-link>
                    <div class="company-card">
                        <div class="job-actions">
                            <button class="btn-edit" onclick="event.stopPropagation(); event.preventDefault(); location.href='utama.php?page=editcompany'">Edit</button>
                        </div>
                        <label class="job-select">
                            <input type="checkbox" class="job-checkbox" data-job-id="6">
                        </label>
                        <div class="logo-placeholder"></div>
                        <p class="company-name">Lemon.io</p>
                        <p class="job-count">5 Jobs</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div class="action-modal" id="deleteModal">
            <div class="action-modal-content">
                <h3>Delete Selected Jobs?</h3>
                <p>Are you sure you want to permanently delete <span id="deleteCount">0</span> selected job(s)? This action cannot be undone and will remove them from the database.</p>
                <div class="action-modal-actions">
                    <button id="confirmDelete" class="confirm-btn">Yes, Delete</button>
                    <button id="cancelDelete" class="cancel-btn">Cancel</button>
                </div>
            </div>
        </div>

        <!-- Active Confirmation Modal -->
        <div class="action-modal" id="activeModal">
            <div class="action-modal-content">
                <h3>Set Jobs to Active?</h3>
                <p>Are you sure you want to set <span id="activeCount">0</span> selected job(s) to active? These jobs will be visible to users.</p>
                <div class="action-modal-actions">
                    <button id="confirmActive" class="confirm-btn">Yes, Set Active</button>
                    <button id="cancelActive" class="cancel-btn">Cancel</button>
                </div>
            </div>
        </div>

        <!-- Inactive Confirmation Modal -->
        <div class="action-modal" id="inactiveModal">
            <div class="action-modal-content">
                <h3>Set Jobs to Inactive?</h3>
                <p>Are you sure you want to set <span id="inactiveCount">0</span> selected job(s) to inactive? These jobs will be hidden from users but remain in the database.</p>
                <div class="action-modal-actions">
                    <button id="confirmInactive" class="confirm-btn">Yes, Set Inactive</button>
                    <button id="cancelInactive" class="cancel-btn">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    // Elements
    const bulkActionSelect = document.getElementById('bulkAction');
    const selectAllCheckbox = document.getElementById('selectAll');
    const selectAllLabel = document.getElementById('selectAllLabel');
    const applyActionBtn = document.getElementById('applyActionBtn');
    const jobCheckboxes = document.querySelectorAll('.job-checkbox');
    const jobSelects = document.querySelectorAll('.job-select');
    const cardLinks = document.querySelectorAll('.company-card-link');
    
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

    // CRITICAL FIX: Proper checkbox toggle with label click
    jobSelects.forEach((label, index) => {
        label.addEventListener('click', function(e) {
            e.stopPropagation();
            e.preventDefault();
            
            // Get the checkbox inside this label
            const checkbox = this.querySelector('.job-checkbox');
            
            // Toggle checkbox state
            checkbox.checked = !checkbox.checked;
            
            // Trigger change event untuk update Select All
            const changeEvent = new Event('change', { bubbles: true });
            checkbox.dispatchEvent(changeEvent);
            
            console.log('Checkbox clicked:', checkbox.getAttribute('data-job-id'), 'Checked:', checkbox.checked);
        });
    });

    // Show/Hide checkboxes based on bulk action selection
    bulkActionSelect.addEventListener('change', function() {
        const selectedValue = this.value;
        
        if (['delete', 'active', 'inactive'].includes(selectedValue)) {
            // Show Select All checkbox and label
            selectAllCheckbox.style.display = 'inline-block';
            selectAllLabel.style.display = 'inline-block';
            
            // Show all job checkboxes
            jobSelects.forEach(select => {
                select.classList.add('show');
            });
            
            // Disable card links when checkboxes are active
            updateCardLinksState();
        } else {
            // Hide Select All checkbox and label
            selectAllCheckbox.style.display = 'none';
            selectAllLabel.style.display = 'none';
            selectAllCheckbox.checked = false;
            
            // Hide all job checkboxes and uncheck them
            jobSelects.forEach(select => {
                select.classList.remove('show');
            });
            jobCheckboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
            
            // Enable card links
            updateCardLinksState();
        }
    });

    // Function to update card links state based on checkbox status
    function updateCardLinksState() {
        const bulkActionActive = ['delete', 'active', 'inactive'].includes(bulkActionSelect.value);
        
        cardLinks.forEach((link, index) => {
            const checkbox = jobCheckboxes[index];
            
            if (bulkActionActive) {
                // Disable link when bulk action is active
                link.classList.add('disabled-link');
                link.style.cursor = 'default';
            } else {
                // Enable link when no bulk action
                link.classList.remove('disabled-link');
                link.style.cursor = 'pointer';
            }
        });
    }

    // Prevent card click when bulk action is active
    cardLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.classList.contains('disabled-link')) {
                e.preventDefault();
                return false;
            }
        });
    });

    // Select/Deselect All functionality
    selectAllCheckbox.addEventListener('change', function() {
        jobCheckboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });

    // Update Select All status when individual checkbox changes
    jobCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const allChecked = Array.from(jobCheckboxes).every(cb => cb.checked);
            const someChecked = Array.from(jobCheckboxes).some(cb => cb.checked);
            
            selectAllCheckbox.checked = allChecked;
            selectAllCheckbox.indeterminate = someChecked && !allChecked;
        });
    });

    // Get selected jobs
    function getSelectedJobs() {
        return Array.from(jobCheckboxes)
            .filter(cb => cb.checked)
            .map(cb => cb.getAttribute('data-job-id'));
    }

    // Apply button click handler
    applyActionBtn.addEventListener('click', function() {
        const selectedAction = bulkActionSelect.value;
        const selectedJobs = getSelectedJobs();
        
        if (!selectedAction) {
            alert('Please select an action first');
            return;
        }
        
        if (selectedJobs.length === 0) {
            alert('Please select at least one job');
            return;
        }
        
        const count = selectedJobs.length;
        
        switch(selectedAction) {
            case 'delete':
                document.getElementById('deleteCount').textContent = count;
                deleteModal.style.display = 'flex';
                break;
            case 'active':
                document.getElementById('activeCount').textContent = count;
                activeModal.style.display = 'flex';
                break;
            case 'inactive':
                document.getElementById('inactiveCount').textContent = count;
                inactiveModal.style.display = 'flex';
                break;
        }
    });

    // Delete Modal Actions
    confirmDelete.addEventListener('click', function() {
        const selectedJobs = getSelectedJobs();
        console.log('Deleting jobs:', selectedJobs);
        
        // TODO: Add AJAX call here
        
        deleteModal.style.display = 'none';
        resetBulkAction();
    });

    cancelDelete.addEventListener('click', function() {
        deleteModal.style.display = 'none';
    });

    // Active Modal Actions
    confirmActive.addEventListener('click', function() {
        const selectedJobs = getSelectedJobs();
        console.log('Setting jobs to active:', selectedJobs);
        
        // TODO: Add AJAX call here
        
        activeModal.style.display = 'none';
        resetBulkAction();
    });

    cancelActive.addEventListener('click', function() {
        activeModal.style.display = 'none';
    });

    // Inactive Modal Actions
    confirmInactive.addEventListener('click', function() {
        const selectedJobs = getSelectedJobs();
        console.log('Setting jobs to inactive:', selectedJobs);
        
        // TODO: Add AJAX call here
        
        inactiveModal.style.display = 'none';
        resetBulkAction();
    });

    cancelInactive.addEventListener('click', function() {
        inactiveModal.style.display = 'none';
    });

    // Reset bulk action
    function resetBulkAction() {
        bulkActionSelect.value = '';
        selectAllCheckbox.checked = false;
        selectAllCheckbox.style.display = 'none';
        selectAllLabel.style.display = 'none';
        
        jobSelects.forEach(select => {
            select.classList.remove('show');
        });
        jobCheckboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
        
        updateCardLinksState();
    }

    // Close modal when clicking outside
    window.addEventListener('click', function(e) {
        if (e.target === deleteModal) deleteModal.style.display = 'none';
        if (e.target === activeModal) activeModal.style.display = 'none';
        if (e.target === inactiveModal) inactiveModal.style.display = 'none';
    });
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