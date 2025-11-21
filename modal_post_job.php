<style>
    /* Overlay Gelap di belakang pop-up */
    .modal-overlay {
        display: none; /* Hidden by default */
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.5);
        backdrop-filter: blur(4px);
    }

    /* Kotak Putih Form */
    .modal-content {
        background-color: #fff;
        margin: 5% auto;
        padding: 0;
        border-radius: 16px;
        width: 90%;
        max-width: 650px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        position: relative;
        animation: slideDown 0.3s ease-out;
    }

    @keyframes slideDown {
        from {transform: translateY(-50px); opacity: 0;}
        to {transform: translateY(0); opacity: 1;}
    }

    /* Header Modal */
    .modal-header {
        padding: 20px 24px;
        border-bottom: 1px solid #eee;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .modal-header h3 {
        margin: 0;
        font-size: 20px;
        color: #333;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
    }

    /* Tombol Close (X) */
    .close-modal {
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
        line-height: 1;
        background: none;
        border: none;
        padding: 0;
    }

    .close-modal:hover {
        color: #000;
    }

    /* Body Form */
    .modal-body {
        padding: 24px;
        max-height: 70vh;
        overflow-y: auto;
    }

    .modal-form-group {
        margin-bottom: 16px;
    }

    .modal-form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #333;
        font-size: 14px;
        font-family: 'Poppins', sans-serif;
    }

    .modal-form-group input,
    .modal-form-group select,
    .modal-form-group textarea {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        box-sizing: border-box;
        transition: border-color 0.3s;
    }

    .modal-form-group input:focus,
    .modal-form-group select:focus,
    .modal-form-group textarea:focus {
        border-color: var(--primary, #007AFF);
        outline: none;
    }

    .modal-form-group textarea {
        resize: vertical;
        min-height: 80px;
    }

    .modal-form-row {
        display: flex;
        gap: 16px;
    }
    
    .modal-form-row .modal-form-group {
        flex: 1;
    }

    /* Footer Modal */
    .modal-footer {
        padding: 16px 24px;
        border-top: 1px solid #eee;
        text-align: right;
        background-color: #f9f9f9;
        border-radius: 0 0 16px 16px;
    }

    .btn-submit-job {
        background-color: var(--primary, #007AFF);
        color: white;
        padding: 10px 24px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        font-size: 14px;
        font-family: 'Poppins', sans-serif;
    }

    .btn-submit-job:hover {
        background-color: #005ec4;
    }

    @media (max-width: 768px) {
        .modal-form-row {
            flex-direction: column;
            gap: 0;
        }
    }
</style>

<div id="jobPostingModal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Create Job Posting</h3>
            <button class="close-modal" id="closePostJob">&times;</button>
        </div>
        
        <form action="process_job.php" method="POST">
            <div class="modal-body">
                <input type="hidden" name="company_id" value="<?php echo $_SESSION['company_id'] ?? ''; ?>">

                <div class="modal-form-group">
                    <label for="company_name">Company Name <span style="color:red">*</span></label>
                    <input type="text" id="company_name" name="company_name" required placeholder="e.g. HireMesh Inc.">
                </div>

                <div class="modal-form-group">
                    <label for="title">Job Title <span style="color:red">*</span></label>
                    <input type="text" id="title" name="title" required placeholder="e.g. Senior UI/UX Designer">
                </div>

                <div class="modal-form-row">
                    <div class="modal-form-group">
                        <label for="job_type">Job Type <span style="color:red">*</span></label>
                        <select id="job_type" name="job_type" required>
                            <option value="">Select Type</option>
                            <option value="fulltime">Full Time</option>
                            <option value="parttime">Part Time</option>
                            <option value="contract">Contract</option>
                            <option value="intern">Internship</option>
                        </select>
                    </div>
                    
                    <div class="modal-form-group">
                        <label for="salary">Salary Range</label>
                        <div style="display: flex; gap: 8px;">
                            <select name="currency" id="currency" style="width: auto; min-width: 110px; background-color: #f8f9fa;">
                                <option value="IDR">Rp (IDR)</option>
                                <option value="USD">$ (USD)</option>
                            </select>
                            
                            <input type="text" id="salary" name="salary" placeholder="e.g. 5.000.000 - 10.000.000" style="flex: 1;">
                        </div>
                    </div>
                </div>

                <div class="modal-form-group">
                    <label for="location">Location <span style="color:red">*</span></label>
                    <input type="text" id="location" name="location" required placeholder="e.g. Jakarta (Remote)">
                </div>

                <div class="modal-form-group">
                    <label for="description">Job Description <span style="color:red">*</span></label>
                    <textarea id="description" name="description" rows="4" required placeholder="Explain the role and responsibilities..."></textarea>
                </div>

                <div class="modal-form-group">
                    <label for="skills_required">Skills Required</label>
                    <textarea id="skills_required" name="skills_required" rows="2" placeholder="e.g. Figma, HTML, CSS, Teamwork"></textarea>
                </div>

                <div class="modal-form-group">
                    <label for="benefits">Benefits</label>
                    <textarea id="benefits" name="benefits" rows="2" placeholder="e.g. Health Insurance, Free Lunch"></textarea>
                </div>

                <div class="modal-form-row">
                    <div class="modal-form-group">
                        <label for="apply_via">Apply Method</label>
                        <select id="apply_via" name="apply_via">
                            <option value="external">External Link</option>
                            <option value="company">Internal/Email</option>
                        </select>
                    </div>
                    <div class="modal-form-group">
                        <label for="apply_link">Application Link/Email <span style="color:red">*</span></label>
                        <input type="text" id="apply_link" name="apply_link" required placeholder="https://... or mailto:...">
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="submit" class="btn-submit-job">Post Job Now</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil elemen berdasarkan ID
        const modal = document.getElementById("jobPostingModal");
        const btn = document.getElementById("btnOpenPostJob");
        const closeBtn = document.getElementById("closePostJob");

        // Pastikan elemen tombol ada sebelum menambahkan event listener
        if (btn && modal) {
            btn.addEventListener('click', function(e) {
                e.preventDefault(); // Mencegah refresh halaman
                modal.style.display = "block";
                document.body.style.overflow = "hidden"; // Matikan scroll background
            });
        }

        // Event listener untuk tombol close (x)
        if (closeBtn && modal) {
            closeBtn.addEventListener('click', function() {
                modal.style.display = "none";
                document.body.style.overflow = "auto"; // Hidupkan scroll background
            });
        }

        // Event listener jika klik di luar kotak form (overlay gelap)
        window.addEventListener('click', function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                document.body.style.overflow = "auto";
            }
        });
    });
</script>