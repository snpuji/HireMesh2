<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySkill Academy</title>
    <link rel="stylesheet" href="css/course.css" />

    <style>
        /* CSS tambahan jika ada, tapi sebagian besar pindah ke course.css */
    </style>
</head>
<body>
    <section class="academy-page-wrapper">
        <div class="academy-header">
            <a class="back-btn"  onclick="history.back()">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M15 18l-6-6 6-6"/>
                </svg>
                All academy
            </a>
        </div>

        <section class="profile-section">
            <div class="academy-logo">MySkill</div>
            
            <div class="profile-info">
                <h1 class="academy-name">MySkill</h1>
                
                <div class="profile-meta">
                    <div class="meta-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        4 Courses
                    </div>
                    <div class="meta-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
                        </svg>
                        <a href="https://myskill.id" target="_blank">https://myskill.id</a>
                    </div>
                </div>

                <div class="about-section">
                    <h2 class="section-title">ABOUT US</h2>
                    <p class="about-text">
                        MySkill is a leading Indonesian e-learning platform dedicated to helping individuals develop practical skills for the digital economy. With a wide range of courses in areas such as programming, digital marketing, graphic design, and business, MySkill empowers learners to enhance their professional capabilities and stay competitive in the global job market.
                    </p>
                    <p class="about-text" style="margin-top: 16px;">
                        Through interactive lessons, expert instructors, and hands-on projects, MySkill provides learners with the knowledge and tools needed to succeed in remote work and international career opportunities. The platform is committed to making high-quality education accessible, practical, and relevant for learners at every stage of their career.
                    </p>
                </div>
            </div>
        </section>

        <section class="courses-section">
            <h2 class="section-title">Courses</h2>
            
            <div class="courses-grid">
                <div class="course-card open-modal"
                    data-title="DIGITAL MARKETING: FULLSTACK INTENSIVE BOOTCAMP"
                    data-date="05 Januari 2026"
                    data-price="650.000"
                    data-original-price="1.100.000"
                    data-voucher="HIREMESHGJ25">
                    <div class="course-image" style="background-image: url('/HireMesh2/Images/course1.png');">
                        </div>
                    <div class="course-content">
                        <h3 class="course-title">DIGITAL MARKETING: FULLSTACK INTENSIVE BOOTCAMP</h3>
                        <div class="course-meta">
                            <div class="course-date">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                                05 Januari 2026
                            </div>
                            <div class="course-price">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                                    <line x1="7" y1="7" x2="7.01" y2="7"/>
                                </svg>
                                Rp 650.000 <span class="price-original">Rp 1.100.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="course-card open-modal"
                    data-title="UI-UX RESEARCH AND DESIGN: FULLSTACK INTENSIVE BOOTCAMP"
                    data-date="30 Desember 2025"
                    data-price="230.000"
                    data-original-price="1.100.000"
                    data-voucher="HIREMESHGJ25">
                    <div class="course-image" style="background-image: url('/HireMesh2/Images/course2.png');">
                        </div>
                    <div class="course-content">
                        <h3 class="course-title">UI-UX RESEARCH AND DESIGN: FULLSTACK INTENSIVE BOOTCAMP</h3>
                        <div class="course-meta">
                            <div class="course-date">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                                30 Desember 2025
                            </div>
                            <div class="course-price">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                                    <line x1="7" y1="7" x2="7.01" y2="7"/>
                                </svg>
                                Rp 230.000 <span class="price-original">Rp 1.100.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="course-card open-modal"
                    data-title="DATA ANALYSIS: FULLSTACK INTENSIVE BOOTCAMP"
                    data-date="30 Desember 2025"
                    data-price="650.000"
                    data-original-price="1.100.000"
                    data-voucher="HIREMESHGJ25">
                    <div class="course-image" style="background-image: url('/HireMesh2/Images/course3.png');">
                        </div>
                    <div class="course-content">
                        <h3 class="course-title">DATA ANALYSIS: FULLSTACK INTENSIVE BOOTCAMP</h3>
                        <div class="course-meta">
                            <div class="course-date">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                                30 Desember 2025
                            </div>
                            <div class="course-price">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                                    <line x1="7" y1="7" x2="7.01" y2="7"/>
                                </svg>
                                Rp 650.000 <span class="price-original">Rp 1.100.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="course-card open-modal"
                    data-title="ENGLISH & TOEFL PREPARATION BOOTCAMP"
                    data-date="30 Desember 2025"
                    data-price="230.000"
                    data-original-price="350.000"
                    data-voucher="HIREMESHGJ25">
                    <div class="course-image" style="background-image: url('/HireMesh2/Images/course4.png');">
                        </div>
                    <div class="course-content">
                        <h3 class="course-title">ENGLISH & TOEFL PREPARATION BOOTCAMP</h3>
                        <div class="course-meta">
                            <div class="course-date">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                                30 Desember 2025
                            </div>
                            <div class="course-price">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                                    <line x1="7" y1="7" x2="7.01" y2="7"/>
                                </svg>
                                Rp 230.000 <span class="price-original">Rp 350.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <div id="courseModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <div class="modal-image" id="modalImage">
            </div>
        
        <div class="modal-body">
            <h2 id="modalTitle"></h2>
            
            <div class="modal-meta">
                <div class="meta-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                    <span id="modalDate"></span>
                </div>
                <div class="meta-item price-details">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                        <line x1="7" y1="7" x2="7.01" y2="7"/>
                    </svg>
                    Rp <span id="modalPrice"></span> <span class="price-original">Rp <span id="modalOriginalPrice"></span></span>
                </div>
            </div>

            <div class="voucher-section">
                <h3>How to Redeem Your MySkill Voucher via HireMesh Academy</h3>
                <ol>
                    <li>
                        <p><b>Copy Your Voucher Code</b></p>
                        <ul>
                            <li>In the pop-up, click the <span class="bold-text">"Copy Code"</span> button to copy your exclusive voucher.</li>
                        </ul>
                    </li>
                    <li>
                        <p><b>Go to MySkill</b></p>
                        <ul>
                            <li>Click the <span class="bold-text">"Claim Now"</span> button.</li>
                            <li>This will open the MySkill course page in a new browser tab.</li>
                        </ul>
                    </li>
                    <li>
                        <p><b>Apply Voucher During Checkout</b></p>
                        <ul>
                            <li>Proceed to checkout and paste your copied voucher code into the <span class="bold-text">"Promo Code"</span> or <span class="bold-text">"Voucher"</span> field.</li>
                            <li><span class="important-text">Important:</span> If the voucher code is not entered, the discount will not be applied.</li>
                        </ul>
                    </li>
                    <li>
                        <p><b>Complete Payment and Start Learning</b></p>
                        <ul>
                            <li>Once payment is completed, you can access the course immediately at the discounted price.</li>
                        </ul>
                    </li>
                </ol>
            </div>

            <div class="modal-actions">
                <div class="voucher-code-wrapper">
                    <span id="modalVoucherCode"></span>
                    <button class="copy-btn" data-clipboard-target="#modalVoucherCode" title="Copy Code">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                        </svg>
                    </button>
                </div>
                <a href="https://myskill.id" target="_blank" class="claim-btn">
                    Claim Now
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    // Revisi di JavaScript agar tombol copy tidak memiliki teks saat normal, hanya ikon
    // Saya asumsikan Anda ingin feedback teks "Copied!" muncul sebentar di tombol
    // Jika tidak, hapus saja bagian innerHTML yang mengandung teks.
    document.addEventListener('DOMContentLoaded', () => {
        // ... (kode JS modal sebelumnya) ...

        // Fungsi Copy Voucher Code
        copyBtn.onclick = () => {
            const textToCopy = modalVoucherCode.textContent;
            navigator.clipboard.writeText(textToCopy).then(() => {
                // Feedback visual: Tampilkan ikon centang dan teks 'Copied!'
                copyBtn.innerHTML = `
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                    <span class="copy-feedback">Copied!</span>
                `;
                // Sembunyikan 'Copied!' setelah 1.5 detik
                setTimeout(() => {
                    copyBtn.innerHTML = `
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                        </svg>
                    `;
                }, 1500);
            }).catch(err => {
                console.error('Could not copy text: ', err);
            });
        };
    });
</script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('courseModal');
            const closeBtn = document.querySelector('.modal-content .close-btn');
            const courseCards = document.querySelectorAll('.course-card');
            
            // Elemen di dalam modal
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalDate = document.getElementById('modalDate');
            const modalPrice = document.getElementById('modalPrice');
            const modalOriginalPrice = document.getElementById('modalOriginalPrice');
            const modalVoucherCode = document.getElementById('modalVoucherCode');
            const copyBtn = document.querySelector('.copy-btn');

            // Fungsi untuk membuka modal dan mengisi data
            courseCards.forEach(card => {
                card.addEventListener('click', () => {
                    const title = card.dataset.title;
                    const date = card.dataset.date;
                    const price = card.dataset.price;
                    const originalPrice = card.dataset.originalPrice;
                    const voucher = card.dataset.voucher;
                    const imageUrl = card.querySelector('.course-image').style.backgroundImage.slice(5, -2);
                    
                    // Mengisi konten modal
                    modalTitle.textContent = title;
                    modalDate.textContent = date;
                    modalPrice.textContent = price;
                    modalOriginalPrice.textContent = originalPrice;
                    modalVoucherCode.textContent = voucher;
                    // Mengubah path item di pop-up sesuai permintaan: /HireMesh2/Images/png.png
                    modalImage.style.backgroundImage = `url('/HireMesh2/Images/png.png')`; 
                    
                    modal.style.display = 'flex';
                });
            });

            // Fungsi untuk menutup modal
            closeBtn.onclick = () => {
                modal.style.display = 'none';
            }

            // Menutup modal jika klik di luar modal
            window.onclick = (event) => {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            }

            // Fungsi Copy Voucher Code
            copyBtn.onclick = () => {
                const textToCopy = modalVoucherCode.textContent;
                navigator.clipboard.writeText(textToCopy).then(() => {
                    // Feedback visual
                    copyBtn.innerHTML = `
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        Copied!
                    `;
                    setTimeout(() => {
                        copyBtn.innerHTML = `
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                            </svg>
                            Copy Code
                        `;
                    }, 1500);
                }).catch(err => {
                    console.error('Could not copy text: ', err);
                });
            };
        });
    </script>
</body>
</html>