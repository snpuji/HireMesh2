<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Review Management</title>
  <link rel="stylesheet" href="../css/addjob.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/revenue.css" />
</head>
<style>
    /* === GLOBAL STYLES === */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f5f7fa;
    }

    .container2 {
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    h1 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
    }

    /* === CONTROLS BAR (Filter & Actions) SESUAI GAMBAR === */
    .controls-bar {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 25px;
        flex-wrap: wrap;
    }

    /* Checkbox Select All Style */
    .select-all-wrapper {
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 500;
        color: #555;
        cursor: pointer;
        margin-right: 10px;
    }

    .select-all-wrapper input[type="checkbox"] {
        width: 18px;
        height: 18px;
        cursor: pointer;
        accent-color: #007bff;
    }

    /* Dropdown Styles */
    .custom-select {
        padding: 10px 15px;
        border: 1px solid #dcdfe6;
        border-radius: 8px;
        font-size: 14px;
        color: #333;
        background-color: #fff;
        outline: none;
        cursor: pointer;
        min-width: 150px;
        transition: all 0.2s;
    }

    /* Filter Active Border Color (Blue like image) */
    #filterRating {
        border-color: #007bff; 
        color: #333;
    }

    .custom-select:hover {
        border-color: #007bff;
    }

    /* Apply Button */
    .btn-apply {
        padding: 10px 25px;
        background-color: #007bff; /* Biru terang */
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: background 0.2s;
    }

    .btn-apply:hover {
        background-color: #0056b3;
    }

    /* === TABLE STYLES === */
    .job-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    .job-table thead th {
        background-color: #F0F7FF !important; 
        color: #333;
        font-weight: 600;
        border-bottom: 1px solid #dee2e6;
        padding: 15px;
        text-align: left;
    }

    .job-table tbody td {
        padding: 15px;
        border-bottom: 1px solid #f0f0f0;
        vertical-align: middle;
        color: #333;
    }

    /* Star Rating Colors */
    .star-rating {
        color: #FFD700; /* Emas */
        font-size: 16px;
        letter-spacing: 1px;
    }
    .star-grey {
        color: #dcdfe6; /* Abu-abu untuk bintang kosong */
    }

    /* Action Toggle */
    .action-toggle {
        cursor: pointer;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 5px;
        width: fit-content;
    }

    .action-show {
        color: #007bff; 
    }

    .action-hide {
        color: #6c757d; 
    }

    /* Icons */
    .arrow-icon {
        border: solid currentColor;
        border-width: 0 2px 2px 0;
        display: inline-block;
        padding: 3px;
        transform: rotate(45deg);
        margin-bottom: 2px;
        transition: transform 0.2s;
    }

    .arrow-up {
        transform: rotate(-135deg);
        margin-bottom: -2px;
    }

    /* Tabs (Keep existing style) */
    .revenue-tabs {
        margin-bottom: 15px;
        border-bottom: 1px solid #eee;
    }
    .revenue-tab {
        padding: 10px 20px;
        border: none;
        background: none;
        cursor: pointer;
        font-weight: 500;
        color: #666;
        border-bottom: 2px solid transparent;
    }
    .revenue-tab.active {
        color: #007bff;
        border-bottom: 2px solid #007bff;
    }
    .tab-content { display: none; }
    .tab-content.active { display: block; }

</style>

<body>
  <div class="container2">
    <h1>Reviews</h1>

    <div class="controls-bar">
        <label class="select-all-wrapper">
            <input type="checkbox" id="selectAllMain"> Select All
        </label>

        <select id="filterRating" class="custom-select">
            <option value="all">All Ratings</option>
            <option value="5">5 Stars</option>
            <option value="4">4 Stars</option>
            <option value="3">3 Stars</option>
            <option value="2">2 Stars</option>
            <option value="1">1 Star</option>
        </select>

        <select id="bulkActionSelect" class="custom-select" style="border-color: #dcdfe6;">
            <option value="">Select Action</option>
            <option value="hide">Hide Selected</option>
            <option value="show">Show Selected</option>
            <option value="delete">Delete Selected</option>
        </select>

        <button id="btnApply" class="btn-apply">Apply</button>
    </div>

    <div class="revenue-tabs">
      <button class="revenue-tab active" data-tab="external">All Reviews</button>
      <button class="revenue-tab" data-tab="internal">Reported</button>
    </div>

    <div id="external" class="tab-content active">
      <table class="job-table" id="reviewTable">
        <thead>
          <tr>
            <th style="width: 50px;">#</th>
            <th>ID</th>
            <th>Username</th>
            <th>Rating</th>
            <th>Comment</th>
            <th>Created at</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="review-row" data-rating="5" data-id="V1">
            <td><input type="checkbox" class="row-checkbox"></td>
            <td>V1</td>
            <td>Andi Pratama</td>
            <td>
                <span class="star-rating">★★★★★</span>
            </td>
            <td>Super Insightfull, materi sangat jelas!</td>
            <td>2025-09-21</td>
            <td>
                <div class="action-toggle action-show" onclick="toggleRowStatus(this)">
                    <span>Show</span> <i class="arrow-icon"></i>
                </div>
            </td>
          </tr>

          <tr class="review-row" data-rating="4" data-id="V2">
            <td><input type="checkbox" class="row-checkbox"></td>
            <td>V2</td>
            <td>Jessy</td>
            <td>
                <span class="star-rating">★★★★<span class="star-grey">★</span></span>
            </td>
            <td>Worth It, tapi audio agak kecil.</td>
            <td>2025-09-19</td>
            <td>
                <div class="action-toggle action-show" onclick="toggleRowStatus(this)">
                    <span>Show</span> <i class="arrow-icon"></i>
                </div>
            </td>
          </tr>

          <tr class="review-row" data-rating="3" data-id="V3">
            <td><input type="checkbox" class="row-checkbox"></td>
            <td>V3</td>
            <td>Desita</td>
            <td>
                <span class="star-rating">★★★<span class="star-grey">★★</span></span>
            </td>
            <td>Kelasnya lumayan, tapi durasi kepanjangan.</td>
            <td>2025-09-15</td>
            <td>
                <div class="action-toggle action-show" onclick="toggleRowStatus(this)">
                    <span>Show</span> <i class="arrow-icon"></i>
                </div>
            </td>
          </tr>

          <tr class="review-row" data-rating="2" data-id="V4">
            <td><input type="checkbox" class="row-checkbox"></td>
            <td>V4</td>
            <td>Fransisco</td>
            <td>
                <span class="star-rating">★★<span class="star-grey">★★★</span></span>
            </td>
            <td>Kurang membantu untuk pemula.</td>
            <td>2025-09-10</td>
            <td>
                <div class="action-toggle action-hide" onclick="toggleRowStatus(this)">
                    <span>Hide</span> <i class="arrow-icon arrow-up"></i>
                </div>
            </td>
          </tr>

          <tr class="review-row" data-rating="1" data-id="V5">
            <td><input type="checkbox" class="row-checkbox"></td>
            <td>V5</td>
            <td>Wednes</td>
            <td>
                <span class="star-rating">★<span class="star-grey">★★★★</span></span>
            </td>
            <td>Materi tidak sesuai judul. Kecewa.</td>
            <td>2025-09-07</td>
            <td>
                <div class="action-toggle action-hide" onclick="toggleRowStatus(this)">
                    <span>Hide</span> <i class="arrow-icon arrow-up"></i>
                </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div id="internal" class="tab-content">
        <p style="padding: 20px; color: #777;">No reported reviews currently.</p>
    </div>

  </div>

  <script>
    // ========================== 1. FILTER RATING FUNCTION ==========================
    const filterDropdown = document.getElementById('filterRating');
    const tableRows = document.querySelectorAll('.review-row');

    filterDropdown.addEventListener('change', function() {
        const selectedRating = this.value; // 'all', '5', '4', etc.

        tableRows.forEach(row => {
            const rowRating = row.getAttribute('data-rating');
            
            if (selectedRating === 'all') {
                row.style.display = ''; // Show all
            } else if (rowRating === selectedRating) {
                row.style.display = ''; // Show matching
            } else {
                row.style.display = 'none'; // Hide non-matching
            }
        });

        // Reset checkbox 'Select All' when filter changes
        document.getElementById('selectAllMain').checked = false;
    });

    // ========================== 2. SELECT ALL FUNCTION ==========================
    const selectAllMain = document.getElementById('selectAllMain');
    
    selectAllMain.addEventListener('change', function() {
        const isChecked = this.checked;
        // Only select visible rows (those currently shown by filter)
        tableRows.forEach(row => {
            if (row.style.display !== 'none') {
                const checkbox = row.querySelector('.row-checkbox');
                checkbox.checked = isChecked;
            }
        });
    });

    // ========================== 3. BULK ACTION & TOGGLE FUNCTION ==========================
    const btnApply = document.getElementById('btnApply');
    const bulkActionSelect = document.getElementById('bulkActionSelect');

    // Fungsi untuk mengubah status satu baris (Toggle Click)
    function toggleRowStatus(element) {
        const textSpan = element.querySelector('span');
        const icon = element.querySelector('i');
        
        if (textSpan.textContent === 'Show') {
            // Change to Hide
            textSpan.textContent = 'Hide';
            element.className = 'action-toggle action-hide';
            icon.className = 'arrow-icon arrow-up';
        } else {
            // Change to Show
            textSpan.textContent = 'Show';
            element.className = 'action-toggle action-show';
            icon.className = 'arrow-icon';
        }
    }

    // Fungsi Button Apply (Bulk Action)
    btnApply.addEventListener('click', function() {
        const action = bulkActionSelect.value;
        if (!action) return alert("Please select an action first.");

        let count = 0;
        tableRows.forEach(row => {
            const checkbox = row.querySelector('.row-checkbox');
            
            // Hanya proses baris yang dicentang DAN terlihat
            if (checkbox.checked && row.style.display !== 'none') {
                count++;
                const actionDiv = row.querySelector('.action-toggle');
                const textSpan = actionDiv.querySelector('span');
                const icon = actionDiv.querySelector('i');

                if (action === 'hide') {
                    // Ubah status jadi Hide
                    textSpan.textContent = 'Hide';
                    actionDiv.className = 'action-toggle action-hide';
                    icon.className = 'arrow-icon arrow-up';
                } 
                else if (action === 'show') {
                    // Ubah status jadi Show
                    textSpan.textContent = 'Show';
                    actionDiv.className = 'action-toggle action-show';
                    icon.className = 'arrow-icon';
                }
                else if (action === 'delete') {
                    // Hapus baris dari tabel
                    row.remove();
                }
            }
        });

        if (count > 0) {
            alert(`Successfully applied '${action}' to ${count} review(s).`);
            // Uncheck select all after action
            selectAllMain.checked = false;
            document.querySelectorAll('.row-checkbox').forEach(cb => cb.checked = false);
        } else {
            alert("No reviews selected.");
        }
    });

    // ========================== 4. TAB SWITCHING ==========================
    const tabs = document.querySelectorAll('.revenue-tab');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            tabs.forEach(t => t.classList.remove('active'));
            contents.forEach(c => c.classList.remove('active'));
            
            this.classList.add('active');
            const tabId = this.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });

  </script>
</body>
</html>