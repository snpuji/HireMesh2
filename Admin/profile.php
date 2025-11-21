<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Setting - HireMesh</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>


        .profile-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .profile-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
            margin-bottom: 40px;
        }

        .profile-form-section {
            flex: 1;
        }

        .profile-title {
            font-size: var(--h2-font-size);
            font-weight: var(--h2-font-weight);
            color: var(--text-1);
            margin-bottom: 32px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-bottom: 32px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            font-size: var(--body-font-size);
            font-weight: 500;
            color: var(--text-1);
        }

        .form-input {
            width: 100%;
            padding: 16px 20px;
            border: 1px solid var(--border);
            border-radius: 12px;
            font-family: var(--body-font-family);
            font-size: var(--body-font-size);
            color: var(--text-1);
            background-color: var(--card);
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(0, 122, 255, 0.1);
        }

        .form-input::placeholder {
            color: var(--text-2);
            opacity: 0.5;
        }

        .upload-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 16px 24px;
            background-color: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            color: var(--text-2);
            font-family: var(--body-font-family);
            font-size: var(--body-font-size);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .upload-btn:hover {
            border-color: var(--primary);
            background-color: var(--hoverbiru);
            color: var(--primary);
        }

        .profile-picture-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .profile-picture {
            width: 280px;
            height: 280px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid var(--card);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .action-buttons {
            display: flex;
            gap: 16px;
            justify-content: flex-end;
            margin-top: 24px;
        }

        .btn {
            padding: 14px 32px;
            border-radius: 12px;
            font-family: var(--body-font-family);
            font-size: var(--body-font-size);
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-back {
            background-color: transparent;
            color: var(--primary);
            border: 2px solid transparent;
        }

        .btn-back:hover {
            background-color: var(--hoverbiru);
        }

        .btn-save {
            background-color: var(--primary);
            color: white;
            box-shadow: 0 4px 12px rgba(0, 122, 255, 0.3);
        }

        .btn-save:hover {
            background-color: #0066cc;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 122, 255, 0.4);
        }

        .password-section {
            background-color: var(--card);
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            margin-top: 40px;
        }

        .password-title {
            font-size: 24px;
            font-weight: 600;
            color: var(--text-1);
            margin-bottom: 12px;
        }

        .password-description {
            color: var(--text-2);
            font-size: var(--caption-font-size);
            margin-bottom: 24px;
        }

        .btn-change {
            padding: 14px 32px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 12px;
            font-family: var(--body-font-family);
            font-size: var(--body-font-size);
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 122, 255, 0.3);
        }

        .btn-change:hover {
            background-color: #0066cc;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 122, 255, 0.4);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .profile-header {
                flex-direction: column-reverse;
                align-items: center;
            }

            .profile-picture-section {
                width: 100%;
                align-items: center;
            }
        }

        @media (max-width: 768px) {
            body {
                padding: 20px 16px;
            }

            .profile-title {
                font-size: 28px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .profile-picture {
                width: 200px;
                height: 200px;
            }

            .action-buttons {
                flex-direction: column-reverse;
            }

            .btn {
                width: 100%;
            }

            .password-section {
                padding: 24px;
            }
        }

        @media (max-width: 480px) {
            .profile-title {
                font-size: 24px;
            }

            .profile-picture {
                width: 160px;
                height: 160px;
            }

            .form-input {
                padding: 12px 16px;
            }

            .upload-btn {
                padding: 12px 20px;
                font-size: 14px;
            }

            .password-section {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-form-section">
                <h1 class="profile-title">Profile Setting</h1>

                <form id="profileForm">
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label" for="fullName">Full Name</label>
                            <input 
                                type="text" 
                                id="fullName" 
                                class="form-input" 
                                placeholder="Enter your full name"
                                value="">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="username">Username</label>
                            <input 
                                type="text" 
                                id="username" 
                                class="form-input" 
                                placeholder="Enter your username"
                                value="">
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label" for="profilePicture">Change Profile Picture</label>
                            <input 
                                type="file" 
                                id="profilePicture" 
                                accept="image/*" 
                                style="display: none;">
                            <button type="button" class="upload-btn" onclick="document.getElementById('profilePicture').click()">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="17 8 12 3 7 8"></polyline>
                                    <line x1="12" y1="3" x2="12" y2="15"></line>
                                </svg>
                                Upload Foto
                            </button>
                        </div>
                    </div>

                    <div class="action-buttons">
                        <button type="button" class="btn btn-back" onclick="history.back()">Back</button>
                        <button type="submit" class="btn btn-save">Save</button>
                    </div>
                </form>
            </div>

            <div class="profile-picture-section">
                <div class="profile-picture">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=400&fit=crop" 
                         alt="Profile Picture" 
                         id="previewImage">
                </div>
            </div>
        </div>

        <div class="password-section">
            <h2 class="password-title">Password</h2>
            <p class="password-description">You can reset or change your password by clicking here</p>
            <button type="button" class="btn-change" onclick="alert('Change password functionality')">Change</button>
        </div>
    </div>

    <script>
        // Preview uploaded image
        document.getElementById('profilePicture').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('previewImage').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        // Form submission
        document.getElementById('profileForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const fullName = document.getElementById('fullName').value;
            const username = document.getElementById('username').value;
            
            if (!fullName || !username) {
                alert('Please fill in all required fields');
                return;
            }
            
            // Simulate save
            alert('Profile saved successfully!');
            console.log({
                fullName,
                username,
                profilePicture: document.getElementById('profilePicture').files[0]
            });
        });
    </script>
</body>
</html>