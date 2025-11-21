<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            --h4-font-family: "Poppins", Helvetica;
            --h4-font-weight: 500;
            --h4-font-size: 24px;
            --body-font-family: "Poppins", Helvetica;
            --body-font-weight: 400;
            --body-font-size: 16px;
            --h5-font-family: "Poppins", Helvetica;
            --h5-font-weight: 500;
            --h5-font-size: 20px;
            --caption-font-family: "Poppins", Helvetica;
            --caption-font-weight: 300;
            --caption-font-size: 14px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--body-font-family);
            background-color: var(--bg);
            padding: 20px;
        }

        .container {
            display: flex;
            gap: 24px;
            max-width: 1400px;
            padding-top: 120px;
        }

        .left-section {
            flex: 0 0 400px;
        }

        .right-section {
            flex: 1;
        }

        .payment-method {
            background: var(--card);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 16px;
            cursor: pointer;
            border: 1px solid var(--border);
            transition: all 0.3s ease;
        }

        .payment-method:hover {
            box-shadow: 1px -1px 4px 0px rgba(0, 122, 255, 0.25), -1px 1px 4px 0px rgba(0, 122, 255, 0.25);
        }

        .payment-icon {
            width: 48px;
            height: 48px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .payment-icon img {
            max-width: 100%;
            max-height: 100%;
        }

        .payment-info h4 {
            font-family: var(--h5-font-family);
            font-weight: var(--h5-font-weight);
            font-size: var(--h5-font-size);
            color: var(--text-1);
            margin-bottom: 4px;
        }

        .payment-info p {
            font-family: var(--caption-font-family);
            font-weight: var(--caption-font-weight);
            font-size: var(--caption-font-size);
            color: var(--text-2);
        }

        .detail-card {
            background: var(--card);
            border-radius: 12px;
            padding: 32px;
            box-shadow: 1px -1px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .detail-header {
            font-family: var(--h4-font-family);
            font-weight: var(--h4-font-weight);
            font-size: var(--h4-font-size);
            color: var(--primary);
            margin-bottom: 32px;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 16px;
            font-size: var(--body-font-size);
        }

        .detail-label {
            color: var(--text-1);
            font-weight: 400;
        }

        .detail-value {
            color: var(--text-1);
            font-weight: 500;
        }

        .total-row {
            padding-top: 16px;
            border-top: 1px solid var(--border);
            margin-top: 16px;
        }

        .total-label {
            color: var(--primary);
            font-weight: 600;
            font-size: 18px;
        }

        .total-value {
            color: var(--primary);
            font-weight: 600;
            font-size: 18px;
        }

        .button-group {
            display: flex;
            gap: 16px;
            margin-top: 32px;
        }

        .btn {
            flex: 1;
            padding: 14px 24px;
            border-radius: 8px;
            font-family: var(--body-font-family);
            font-size: var(--body-font-size);
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-back {
            background: transparent;
            color: var(--warning);
            border: 1px solid var(--warning);
        }

        .btn-back:hover {
            background: rgba(224, 62, 92, 0.1);
        }

        .btn-pay {
            background: var(--primary);
            color: white;
        }

        .btn-pay:hover {
            background: rgba(0, 122, 255, 0.9);
        }

        .payment-instructions {
            background: var(--card);
            border-radius: 12px;
            padding: 24px;
            margin-top: 24px;
            display: none;
        }

        .payment-instructions.active {
            display: block;
        }

        .instruction-title {
            font-family: var(--h5-font-family);
            font-weight: var(--h5-font-weight);
            font-size: var(--h5-font-size);
            color: var(--text-1);
            margin-bottom: 20px;
        }

        .instruction-step {
            display: flex;
            gap: 12px;
            margin-bottom: 12px;
            align-items: flex-start;
        }

        .step-number {
            width: 28px;
            height: 28px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 600;
            flex-shrink: 0;
        }

        .step-text {
            font-size: var(--body-font-size);
            color: var(--text-1);
            line-height: 28px;
        }

        .step-highlight {
            font-weight: 600;
            color: var(--text-1);
        }

        .upload-section {
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid var(--border);
        }

        .upload-button {
            width: 100%;
            padding: 48px 24px;
            border: 2px dashed var(--border);
            border-radius: 12px;
            background: var(--bg);
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }

        .upload-button:hover {
            border-color: var(--primary);
            background: var(--hoverbiru);
        }

        .upload-icon {
            font-size: 32px;
            color: var(--primary);
        }

        .upload-text {
            font-size: var(--body-font-size);
            color: var(--text-1);
            font-weight: 500;
        }

        .upload-subtext {
            font-size: var(--caption-font-size);
            color: var(--text-2);
        }

        .input-button {
            width: 100%;
            padding: 14px 24px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-family: var(--body-font-family);
            font-size: var(--body-font-size);
            font-weight: 500;
            cursor: pointer;
            margin-top: 24px;
            transition: all 0.3s ease;
        }

        .input-button:hover {
            background: rgba(0, 122, 255, 0.9);
        }

        .uploaded-file {
            display: none;
            padding: 16px;
            background: var(--hoveraktif);
            border-radius: 8px;
            margin-top: 16px;
            align-items: center;
            gap: 12px;
        }

        .uploaded-file.active {
            display: flex;
        }

        .file-icon {
            width: 40px;
            height: 40px;
            background: var(--aktif);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
        }

        .file-info {
            flex: 1;
        }

        .file-name {
            font-weight: 500;
            color: var(--text-1);
            margin-bottom: 4px;
        }

        .file-size {
            font-size: var(--caption-font-size);
            color: var(--text-2);
        }

        .remove-file {
            background: transparent;
            border: none;
            color: var(--warning);
            cursor: pointer;
            font-size: 20px;
            padding: 8px;
        }

        input[type="file"] {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-section">
            <div class="payment-method">
                <div class="payment-icon" style="background: #00A5F0;">
                    <span style="color: white; font-size: 24px; font-weight: 600;">D</span>
                </div>
                <div class="payment-info">
                    <h4>Dana</h4>
                    <p>Scan QR Code with any application</p>
                </div>
            </div>

            <div class="payment-method">
                <div class="payment-icon" style="background: #6B3FA0;">
                    <span style="color: white; font-size: 24px; font-weight: 600;">Q</span>
                </div>
                <div class="payment-info">
                    <h4>QRIS</h4>
                    <p>Scan QR Code with any application</p>
                </div>
            </div>

            <div class="payment-method">
                <div class="payment-icon" style="background: #0066AE;">
                    <span style="color: white; font-size: 20px; font-weight: 700;">BCA</span>
                </div>
                <div class="payment-info">
                    <h4>BCA</h4>
                    <p>Pay easily with BCA</p>
                </div>
            </div>
        </div>

        <div class="right-section">
            <div class="detail-card">
                <h2 class="detail-header">Payment Details</h2>
                
                <div class="detail-row">
                    <span class="detail-label">Sri Nuryani Pujiastuti</span>
                    <span class="detail-value"></span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Breaking Down International Career from Home</span>
                    <span class="detail-value">Rp. 100.000</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Admin Fee</span>
                    <span class="detail-value">Rp. 0.</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Discount</span>
                    <span class="detail-value">10%</span>
                </div>

                <div class="detail-row total-row">
                    <span class="total-label">Total Payment</span>
                    <span class="total-value">Rp. 90.000</span>
                </div>

                <div class="button-group">
                    <button class="btn btn-back">Back</button>
                    <button class="btn btn-pay" onclick="showPaymentInstructions()">Pay</button>
                </div>
            </div>

            <div class="payment-instructions" id="paymentInstructions">
                <h3 class="instruction-title">Payment Method:</h3>
                
                <div class="instruction-step">
                    <div class="step-number">1</div>
                    <div class="step-text">Open the selected e-wallet DANA application</div>
                </div>

                <div class="instruction-step">
                    <div class="step-number">2</div>
                    <div class="step-text">Select "Transfer" or "Send Money" menu</div>
                </div>

                <div class="instruction-step">
                    <div class="step-number">3</div>
                    <div class="step-text">Enter destination account number: <span class="step-highlight">081234567890</span></div>
                </div>

                <div class="instruction-step">
                    <div class="step-number">4</div>
                    <div class="step-text">Enter nominal: <span class="step-highlight">Rp. 599.000</span></div>
                </div>

                <div class="instruction-step">
                    <div class="step-number">5</div>
                    <div class="step-text">Add message: "Payment completed"</div>
                </div>

                <div class="instruction-step">
                    <div class="step-number">6</div>
                    <div class="step-text">Confirm with PIN or fingerprint</div>
                </div>

                <div class="instruction-step">
                    <div class="step-number">7</div>
                    <div class="step-text">Save transfer receipt</div>
                </div>

                <div class="upload-section">
                    <input type="file" id="fileInput" accept="image/*,.pdf" onchange="handleFileSelect(event)">
                    <div class="upload-button" onclick="document.getElementById('fileInput').click()">
                        <div class="upload-icon">+</div>
                        <div class="upload-text">Add Payment Proof</div>
                        <div class="upload-subtext">Click to upload file (JPG, PNG, PDF)</div>
                    </div>

                    <div class="uploaded-file" id="uploadedFile">
                        <div class="file-icon">📄</div>
                        <div class="file-info">
                            <div class="file-name" id="fileName">payment-receipt.jpg</div>
                            <div class="file-size" id="fileSize">2.5 MB</div>
                        </div>
                        <button class="remove-file" onclick="removeFile()">×</button>
                    </div>

                    <button class="input-button" onclick="submitPayment()">Input</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showPaymentInstructions() {
            document.getElementById('paymentInstructions').classList.add('active');
            document.querySelector('.btn-pay').style.display = 'none';
        }

        function handleFileSelect(event) {
            const file = event.target.files[0];
            if (file) {
                const fileName = file.name;
                const fileSize = (file.size / (1024 * 1024)).toFixed(2) + ' MB';
                
                document.getElementById('fileName').textContent = fileName;
                document.getElementById('fileSize').textContent = fileSize;
                document.getElementById('uploadedFile').classList.add('active');
            }
        }

        function removeFile() {
            document.getElementById('fileInput').value = '';
            document.getElementById('uploadedFile').classList.remove('active');
        }

        function submitPayment() {
            const fileInput = document.getElementById('fileInput');
            if (fileInput.files.length > 0) {
                alert('Payment proof uploaded successfully!');
            } else {
                alert('Please upload payment proof first');
            }
        }
    </script>
</body>
</html>