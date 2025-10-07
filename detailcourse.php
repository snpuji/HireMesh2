<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MySkill Voucher - Digital Marketing Bootcamp</title>
  <style>
    :root {
      --sidebar: rgba(240, 241, 245, 1);
      --bg: rgba(245, 250, 255, 1);
      --card: rgba(255, 255, 255, 1);
      --border: rgba(209, 209, 214, 0.5);
      --text-1: rgba(28, 28, 30, 1);
      --text-2: rgba(75, 88, 101, 1);
      --primary: rgba(0, 122, 255, 1);
      --hoverbiru: rgba(239, 247, 255, 1);
      --aktif: rgba(52, 199, 89, 1);
      --hoveraktif: rgba(236, 253, 243, 1);
      --warning: rgba(224, 62, 92, 1);
      --grafik: 0px -4px 1px 0px rgba(49, 130, 189, 1);
      --h2-font-family: "Poppins", Helvetica;
      --h2-font-weight: 600;
      --h2-font-size: 36px;
      --h2-letter-spacing: 0px;
      --h2-line-height: normal;
      --h2-font-style: normal;
      --h1-font-family: "Poppins", Helvetica;
      --h1-font-weight: 700;
      --h1-font-size: 40px;
      --h1-letter-spacing: 0px;
      --h1-line-height: normal;
      --h1-font-style: normal;
      --h3-font-family: "Poppins", Helvetica;
      --h3-font-weight: 500;
      --h3-font-size: 30px;
      --h3-letter-spacing: 0px;
      --h3-line-height: normal;
      --h3-font-style: normal;
      --h4-font-family: "Poppins", Helvetica;
      --h4-font-weight: 500;
      --h4-font-size: 24px;
      --h4-letter-spacing: 0px;
      --h4-line-height: normal;
      --h4-font-style: normal;
      --body-large-font-family: "Poppins", Helvetica;
      --body-large-font-weight: 400;
      --body-large-font-size: 18px;
      --body-large-letter-spacing: 0px;
      --body-large-line-height: normal;
      --body-large-font-style: normal;
      --body-font-family: "Poppins", Helvetica;
      --body-font-weight: 400;
      --body-font-size: 16px;
      --body-letter-spacing: 0px;
      --body-line-height: normal;
      --body-font-style: normal;
      --caption-font-family: "Poppins", Helvetica;
      --caption-font-weight: 300;
      --caption-font-size: 14px;
      --caption-letter-spacing: 0px;
      --caption-line-height: normal;
      --caption-font-style: normal;
      --h5-font-family: "Poppins", Helvetica;
      --h5-font-weight: 500;
      --h5-font-size: 20px;
      --h5-letter-spacing: 0px;
      --h5-line-height: normal;
      --h5-font-style: normal;
      --h6-font-family: "Poppins", Helvetica;
      --h6-font-weight: 500;
      --h6-font-size: 18px;
      --h6-letter-spacing: 0px;
      --h6-line-height: normal;
      --h6-font-style: normal;
      --1: 1px -1px 4px 0px rgba(0, 0, 0, 0.25);
      --12: -4px 4px 4px 0px rgba(0, 0, 0, 0.25), 4px -4px 4px 0px rgba(0, 0, 0, 0.25);
      --hover: 1px -1px 4px 0px rgba(0, 122, 255, 0.25), -1px 1px 4px 0px rgba(0, 122, 255, 0.25);
      --variable-collection-border: rgba(232, 232, 232, 1);
      --variable-collection-color: rgba(209, 196, 233, 1);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: var(--body-font-family);
    }

    body {
      background-color: var(--bg);
      color: var(--text-1);
      padding: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    /* Pop-up Modal */
    .voucher-modal {
      width: 100%;
      max-width: 800px;
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 16px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .voucher-header {
      position: relative;
      height: 300px;
      background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%);
      display: flex;
      align-items: flex-end;
      justify-content: center;
      padding: 20px;
      overflow: hidden;
    }

    .voucher-image {
      width: 100%;
      height: 100%;
      background-image: url('/HireMesh2/Images/png.png');
      background-size: cover;
      background-position: center;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1;
    }

    .voucher-badge {
      position: absolute;
      top: 20px;
      right: 20px;
      background: #1ABC9C;
      color: white;
      padding: 6px 12px;
      border-radius: 6px;
      font-size: 12px;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 4px;
      z-index: 2;
    }

    .voucher-badge svg {
      width: 12px;
      height: 12px;
    }

    .voucher-content {
      padding: 30px;
    }

    .voucher-title {
      font-family: var(--h5-font-family);
      font-weight: var(--h5-font-weight);
      font-size: var(--h5-font-size);
      color: var(--text-1);
      margin-bottom: 20px;
    }

    .voucher-meta {
      display: flex;
      gap: 20px;
      margin-bottom: 20px;
      align-items: center;
    }

    .meta-item {
      display: flex;
      align-items: center;
      gap: 8px;
      color: var(--primary);
      font-size: var(--body-font-size);
      font-weight: 500;
    }

    .meta-item svg {
      width: 18px;
      height: 18px;
    }

    .original-price {
      text-decoration: line-through;
      color: var(--text-2);
      font-size: var(--caption-font-size);
      margin-left: 8px;
    }

    .instructions-title {
      font-family: var(--h4-font-family);
      font-weight: var(--h4-font-weight);
      font-size: var(--h4-font-size);
      color: var(--text-1);
      margin: 30px 0 16px;
    }

    .instructions-list {
      list-style: none;
      padding-left: 0;
      margin: 0;
    }

    .instructions-list li {
      margin-bottom: 16px;
      font-size: var(--body-font-size);
      line-height: 1.6;
      color: var(--text-2);
    }

    .instructions-list li::before {
      content: "•";
      color: var(--text-2);
      font-weight: bold;
      margin-right: 8px;
    }

    .instructions-list li strong {
      color: var(--text-1);
      font-weight: 600;
    }

    .voucher-actions {
      display: flex;
      gap: 16px;
      margin-top: 30px;
      align-items: center;
    }

    .copy-code-btn {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 12px 20px;
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 8px;
      color: var(--text-1);
      font-size: var(--body-font-size);
      cursor: pointer;
      transition: all 0.3s;
    }

    .copy-code-btn:hover {
      background: var(--hoverbiru);
      border-color: var(--primary);
    }

    .copy-code-btn svg {
      width: 18px;
      height: 18px;
    }

    .claim-btn {
      padding: 14px 28px;
      background: var(--primary);
      color: white;
      border: none;
      border-radius: 8px;
      font-size: var(--body-font-size);
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s;
    }

    .claim-btn:hover {
      opacity: 0.9;
      transform: translateY(-2px);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .voucher-modal {
        max-width: 95%;
      }

      .voucher-header {
        height: 200px;
      }

      .voucher-content {
        padding: 20px;
      }

      .voucher-meta {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
      }

      .voucher-actions {
        flex-direction: column;
        gap: 12px;
      }
    }
  </style>
</head>
<body>

  <!-- Pop-up Modal -->
  <div class="voucher-modal">
    <div class="voucher-header">
      <div class="voucher-image"></div>
      <div class="voucher-badge">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87.69 6.88L12 21l-5.69-4.87.69-6.88L22 9.27l-6.91-1.01z"/></svg>
        Rating 4.5/5 • 10.000+ Alumni
      </div>
    </div>

    <div class="voucher-content">
      <h1 class="voucher-title">DIGITAL MARKETING: FULLSTACK INTENSIVE BOOTCAMP</h1>

      <div class="voucher-meta">
        <div class="meta-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
          </svg>
          05 Januari 2026
        </div>
        <div class="meta-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H9"></path>
          </svg>
          Rp 650.000 <span class="original-price">Rp 1.100.000</span>
        </div>
      </div>

      <h2 class="instructions-title">How to Redeem Your MySkill Voucher via HireMesh Academy</h2>

      <ol class="instructions-list">
        <li><strong>Copy Your Voucher Code</strong>
          <ul>
            <li>In the pop-up, click the “Copy Code” button to copy your exclusive voucher.</li>
          </ul>
        </li>
        <li><strong>Go to MySkill</strong>
          <ul>
            <li>Click the “Claim Now” button.</li>
            <li>This will open the MySkill course page in a new browser tab.</li>
          </ul>
        </li>
        <li><strong>Apply Voucher During Checkout</strong>
          <ul>
            <li>Proceed to checkout and paste your copied voucher code into the “Promo Code” or “Voucher” field.</li>
            <li>Important: If the voucher code is not entered, the discount will not be applied.</li>
          </ul>
        </li>
        <li><strong>Complete Payment and Start Learning</strong>
          <ul>
            <li>Once payment is completed, you can access the course immediately at the discounted price.</li>
          </ul>
        </li>
      </ol>

      <div class="voucher-actions">
        <button class="copy-code-btn" id="copyCodeBtn">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
          </svg>
          HIREMESHGJ25
        </button>
        <button class="claim-btn" id="claimBtn">Claim Now</button>
      </div>
    </div>
  </div>

  <script>
    // Copy Voucher Code
    document.getElementById('copyCodeBtn').addEventListener('click', function() {
      navigator.clipboard.writeText('HIREMESHGJ25')
        .then(() => {
          alert('Voucher code copied to clipboard!');
          this.innerHTML = `
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M9 12l2 2 4-4"/>
            </svg>
            Copied!
          `;
          setTimeout(() => {
            this.innerHTML = `
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
              </svg>
              HIREMESHGJ25
            `;
          }, 2000);
        })
        .catch(err => {
          alert('Failed to copy code. Please copy manually.');
        });
    });

    // Claim Now Button
    document.getElementById('claimBtn').addEventListener('click', function() {
      window.open('https://myskill.id', '_blank');
    });
  </script>

</body>
</html>