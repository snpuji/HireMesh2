<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireMesh Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/findjob.css" />
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
    <div class="container1">
        <!-- Konten Utama Jobs Page -->
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

      <!-- ✅ Bulk Action -->
      <select id="bulkAction">
        <option value="">Bulk Action</option>
        <option value="delete">Delete Selected</option>
        <option value="active">Set Active</option>
        <option value="inactive">Set Inactive</option>
      </select>
      <button id="applyActionBtn" class="apply-btn">Apply</button>
    </div>
  </div>
  <a href="utama.php?page=addjob" class="add-new-job-btn">+ Add New Job</a>
</div>


            <div class="job-list">
                <a class="job-card-link">
                    <div class="job-card">
                       <div class="job-actions">
                        <button class="btn-edit" onclick="event.stopPropagation(); location.href='utama.php?page=editjob'">Edit</button>
                        </div>
                        <label class="job-select">
                            <input type="checkbox" class="job-checkbox" data-job-id="1">
                        </label>
                        <div class="job-details">
                            <p class="time-ago">5 hours ago</p>
                            <div class="company-logo-info">
                                <div class="logo-box" style="background-color: #4B0082;"></div>
                                <div>
                                    <h3 class="job-company-title">TenTwenty</h3>
                                    <p class="job-role">UI/UX Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="job-meta">
                            <div class="job-info">
                                <p class="salary-range">$50k-$80k</p>
                                <div class="job-tags">
                                    <span class="tag">Apply via External Website</span>
                                    <span class="tag">Remote</span>
                                    <span class="tag">Asian Only</span>
                                    <span class="tag">Internship</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="job-card-link">
                    <div class="job-card">
                        <div class="job-actions">
                        <button class="btn-edit" onclick="event.stopPropagation(); location.href='utama.php?page=editjob'">Edit</button>
                        </div>
                        <label class="job-select">
                            <input type="checkbox" class="job-checkbox" data-job-id="1">
                        </label>
                        <div class="job-details">
                            <p class="time-ago">5 hours ago</p>
                            <div class="company-logo-info">
                                <div class="logo-box" style="background-color: #E63946;"></div>
                                <div>
                                    <h3 class="job-company-title">Gao Tek Inc.</h3>
                                    <p class="job-role">UI/UX Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="job-meta">
                            <div class="job-info">
                                <p class="salary-range">$50k-$80k</p>
                                <div class="job-tags">
                                    <span class="tag">Apply via External Website</span>
                                    <span class="tag">Remote</span>
                                    <span class="tag">Asian Only</span>
                                    <span class="tag">Internship</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="job-card-link">
    <div class="job-card">
        <div class="job-actions">
            <button class="btn-edit" onclick="event.stopPropagation(); location.href='utama.php?page=editjob'">Edit</button>
        </div>
        <label class="job-select">
            <input type="checkbox" class="job-checkbox" data-job-id="1">
        </label>
        <div class="job-details">
            <p class="time-ago">5 hours ago</p>
            <div class="company-logo-info">
                <div class="logo-box" style="background-color: #E63946;"></div>
                <div>
                    <h3 class="job-company-title">Gao Tek Inc.</h3>
                    <p class="job-role">Graphic Designer</p>
                </div>
            </div>
        </div>
        <div class="job-meta">
            <div class="job-info">
                <p class="salary-range">$50k-$80k</p>
                <div class="job-tags">
                    <span class="tag">Apply via External Website</span>
                    <span class="tag">Remote</span>
                    <span class="tag">Asian Only</span>
                    <span class="tag">Internship</span>
                </div>
            </div>
        </div>
    </div>
</a>

<a class="job-card-link">
    <div class="job-card">
        <div class="job-actions">
            <button class="btn-edit" onclick="event.stopPropagation(); location.href='utama.php?page=editjob'">Edit</button>
        </div>
        <label class="job-select">
            <input type="checkbox" class="job-checkbox" data-job-id="1">
        </label>
        <div class="job-details">
            <p class="time-ago">5 hours ago</p>
            <div class="company-logo-info">
                <div class="logo-box" style="background-color: #FF5733;"></div>
                <div>
                    <h3 class="job-company-title">CleverTap</h3>
                    <p class="job-role">UI/UX Designer</p>
                </div>
            </div>
        </div>
        <div class="job-meta">
            <div class="job-info">
                <p class="salary-range">$50k-$80k</p>
                <div class="job-tags">
                    <span class="tag">Apply via Company Website</span>
                    <span class="tag">Remote</span>
                    <span class="tag">Indonesian Only</span>
                    <span class="tag">Internship</span>
                </div>
            </div>
        </div>
    </div>
</a>

<a class="job-card-link">
    <div class="job-card">
        <div class="job-actions">
            <button class="btn-edit" onclick="event.stopPropagation(); location.href='utama.php?page=editjob'">Edit</button>
        </div>
        <label class="job-select">
            <input type="checkbox" class="job-checkbox" data-job-id="1">
        </label>
        <div class="job-details">
            <p class="time-ago">5 hours ago</p>
            <div class="company-logo-info">
                <div class="logo-box" style="background-color: #6C757D;"></div>
                <div>
                    <h3 class="job-company-title">River Spring Lodge</h3>
                    <p class="job-role">Data Analyst</p>
                </div>
            </div>
        </div>
        <div class="job-meta">
            <div class="job-info">
                <p class="salary-range">$50k-$80k</p>
                <div class="job-tags">
                    <span class="tag">Apply via External Website</span>
                    <span class="tag">Remote</span>
                    <span class="tag">Asian Only</span>
                    <span class="tag">Internship</span>
                </div>
            </div>
        </div>
    </div>
</a>

<a class="job-card-link">
    <div class="job-card">
        <div class="job-actions">
            <button class="btn-edit" onclick="event.stopPropagation(); location.href='utama.php?page=editjob'">Edit</button>
        </div>
        <label class="job-select">
            <input type="checkbox" class="job-checkbox" data-job-id="1">
        </label>
        <div class="job-details">
            <p class="time-ago">5 hours ago</p>
            <div class="company-logo-info">
                <div class="logo-box" style="background-color: #FFD700;"></div>
                <div>
                    <h3 class="job-company-title">Lemon.io</h3>
                    <p class="job-role">Senior Graphic Designer</p>
                </div>
            </div>
        </div>
        <div class="job-meta">
            <div class="job-info">
                <p class="salary-range">$50k-$80k</p>
                <div class="job-tags">
                    <span class="tag">Apply via Company Website</span>
                    <span class="tag">Remote</span>
                    <span class="tag">Asian Only</span>
                    <span class="tag">Internship</span>
                </div>
            </div>
        </div>
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

        <script>
            document.querySelectorAll('.job-checkbox').forEach(box => {
  box.addEventListener('click', e => e.stopPropagation());
});

            // Elements
            const bulkActionSelect = document.getElementById('bulkAction');
            const selectAllCheckbox = document.getElementById('selectAll');
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

            // Show/Hide checkboxes based on selection
            bulkActionSelect.addEventListener('change', function() {
                if (this.value !== '') {
                    // Show Select All checkbox and label
                    selectAllCheckbox.style.display = 'inline-block';
                    selectAllLabel.style.display = 'inline-block';
                    
                    // Show all job checkboxes
                    jobCheckboxes.forEach(checkbox => {
                        checkbox.style.display = 'inline-block';
                    });
                } else {
                    // Hide Select All checkbox and label
                    selectAllCheckbox.style.display = 'none';
                    selectAllLabel.style.display = 'none';
                    selectAllCheckbox.checked = false;
                    
                    // Hide all job checkboxes and uncheck them
                    jobCheckboxes.forEach(checkbox => {
                        checkbox.style.display = 'none';
                        checkbox.checked = false;
                    });
                }
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
                /*
                fetch('delete_jobs.php', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify({job_ids: selectedJobs})
                })
                .then(response => response.json())
                .then(data => {
                    if(data.success) {
                        selectedJobs.forEach(jobId => {
                            const checkbox = document.querySelector(`[data-job-id="${jobId}"]`);
                            checkbox.closest('.job-card-link').remove();
                        });
                        alert('Jobs deleted successfully');
                    }
                });
                */
                
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
                
                jobCheckboxes.forEach(checkbox => {
                    checkbox.checked = false;
                    checkbox.style.display = 'none';
                });
            }

            // Close modal when clicking outside
            window.addEventListener('click', function(e) {
                if (e.target === deleteModal) deleteModal.style.display = 'none';
                if (e.target === activeModal) activeModal.style.display = 'none';
                if (e.target === inactiveModal) inactiveModal.style.display = 'none';
            });
        </script>
        <script>
document.addEventListener("DOMContentLoaded", () => {
  const bulkAction = document.getElementById("bulkAction");
  const checkboxes = document.querySelectorAll(".job-select");

  bulkAction.addEventListener("change", () => {
    const selectedValue = bulkAction.value;

    // Jika pilih delete, active, inactive => tampilkan checkbox
    if (["delete", "active", "inactive"].includes(selectedValue)) {
      checkboxes.forEach(cb => cb.classList.add("show"));
    } 
    // Jika kosong (Bulk Action default) => sembunyikan checkbox lagi
    else {
      checkboxes.forEach(cb => cb.classList.remove("show"));
      document.querySelectorAll(".job-checkbox").forEach(cb => cb.checked = false);
    }
  });
});
</script>

    </div>
<script>
document.querySelectorAll('.job-card').forEach(card => {
  card.addEventListener('click', function(e) {
    const bulkAction = document.getElementById("bulkAction").value;

    // Kalau sedang memilih bulk action (delete/active/inactive), nonaktifkan klik card
    if (["delete", "active", "inactive"].includes(bulkAction)) return;

    // Kalau bukan tombol edit / checkbox baru arahkan ke previewjob
    if (!e.target.closest('.btn-edit') && !e.target.closest('.job-checkbox')) {
      window.location.href = 'utama.php?page=previewjob';
    }
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

</body>
</html>