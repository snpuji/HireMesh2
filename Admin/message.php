<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Messages</title>
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
    }


    .container1 {
      max-width: 1400px;
      margin: 20px;
      background-color: var(--card);
      border-radius: 16px;
      padding: 32px;
      box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.08);
    }

    h1 {
      font-size: 40px;
      font-weight: 700;
      color: var(--text-1);
      margin-bottom: 32px;
    }

    .messages-list {
      display: flex;
      flex-direction: column;
      gap: 0;
    }

    .message-item {
      display: flex;
      align-items: flex-start;
      padding: 24px 0;
      border-bottom: 1px solid var(--border);
      cursor: pointer;
      transition: background-color 0.2s;
      position: relative;
    }

    .message-item:last-child {
      border-bottom: none;
    }

    .message-item:hover {
      background-color: var(--hoverbiru);
    }

    .avatar {
      width: 64px;
      height: 64px;
      border-radius: 50%;
      border: 2px solid var(--primary);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      font-weight: 600;
      color: var(--primary);
      background-color: var(--card);
      flex-shrink: 0;
      margin-right: 20px;
    }

    .message-content {
      flex: 1;
      min-width: 0;
    }

    .message-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 8px;
    }

    .sender-name {
      font-size: 20px;
      font-weight: 500;
      color: var(--text-1);
    }

    .message-time {
      font-size: 16px;
      color: var(--text-2);
      font-weight: 400;
      margin-left: auto;
      padding-left: 20px;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .message-text {
      font-size: 16px;
      font-weight: 400;
      color: var(--text-2);
      line-height: 1.5;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
    }

    .unread-badge {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background-color: var(--primary);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      font-weight: 600;
      flex-shrink: 0;
    }

    @media (max-width: 768px) {
      body {
        padding: 20px;
      }

      .container {
        padding: 20px;
      }

      h1 {
        font-size: 32px;
        margin-bottom: 24px;
      }

      .avatar {
        width: 52px;
        height: 52px;
        font-size: 20px;
        margin-right: 16px;
      }

      .sender-name {
        font-size: 18px;
      }

      .message-text {
        font-size: 14px;
      }

      .message-time {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <div class="container1">
    <h1>Messages</h1>
    <div class="messages-list">
      <a href="chat.php" class="message-item">
        <div class="avatar">R</div>
        <div class="message-content">
            <div class="message-header">
            <span class="sender-name">Rina</span>
            <div class="message-time">
                21:00
                <span class="unread-badge">1</span>
            </div>
            </div>
            <div class="message-text">
            Hey! Bisa langsung dari Job Listing, pilih lowongan yang cocok, klik Apply, sistem otomatis kirim profil + CV kamu...
            </div>
        </div>
        </a>

      <div class="message-item">
        <div class="avatar">D</div>
        <div class="message-content">
          <div class="message-header">
            <span class="sender-name">Andi</span>
            <div class="message-time">21:00</div>
          </div>
          <div class="message-text">
            Ada, Dimas. Tinggal klik tombol Save/Favorite di job listing, nanti bisa dicek ulang di menu Saved Jobs.
          </div>
        </div>
      </div>

      <div class="message-item">
        <div class="avatar">A</div>
        <div class="message-content">
          <div class="message-header">
            <span class="sender-name">Desi</span>
            <div class="message-time">21:00</div>
          </div>
          <div class="message-text">
            Nanti akan muncul notifikasi langsung di dashboard kamu. Selain itu, kami juga kirim email biar nggak terlewat.
          </div>
        </div>
      </div>

      <div class="message-item">
        <div class="avatar">M</div>
        <div class="message-content">
          <div class="message-header">
            <span class="sender-name">Dimas</span>
            <div class="message-time">21:00</div>
          </div>
          <div class="message-text">
            Kamu bisa isi bagian Education dulu, lalu tambahkan Skills. Banyak perusahaan yang juga buka untuk entry-level.
          </div>
        </div>
      </div>

      <div class="message-item">
        <div class="avatar">D</div>
        <div class="message-content">
          <div class="message-header">
            <span class="sender-name">Maya</span>
            <div class="message-time">21:00</div>
          </div>
          <div class="message-text">
            Semua job di sini memang fokus untuk pekerjaan remote agar bisa dikerjakan dari Indonesia.
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>