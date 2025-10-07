<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
/>
<section class="message-container">
  <!-- HEADER -->
  <header class="message-header">
  <div class="back-btn" onclick="window.history.back()">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M15 18l-6-6 6-6" />
    </svg>
  </div>

  <div class="profile">
    <div class="avatar">A</div>
    <div class="info">
      <h4>Admin HireMesh</h4>
      <p class="status">Online</p>
    </div>
  </div>
</header>

  <!-- CHAT AREA -->
  <div class="message-body">
    <div class="empty-message">
      <i class="fa-regular fa-message"></i>
      <p>No Message Selected</p>
    </div>
  </div>

<!-- INPUT AREA -->
<div class="message-input">
  <input type="text" placeholder="Type a message..." id="chatInput" />
  <button class="send-btn" title="Send Message">
    <i class="fa-solid fa-location-arrow send-icon"></i>
  </button>
</div>


</section>

<!-- CSS -->
<style>
  :root {
    --primary: #007aff;
    --bg: #ffffff;
    --border: #e5e7eb;
    --text: #333;
    --muted: #6b7280;
  }
 .message-input {
  display: flex;
  align-items: center;
  padding: 12px 16px;
  border-top: 1px solid var(--border);
  background: #fff;
}

.message-input input {
  flex: 1;
  padding: 10px 16px;
  border: 1px solid #ddd;
  border-radius: 25px;
  outline: none;
  font-family: 'Poppins', sans-serif;
  font-size: 14px;
}

.message-input input:focus {
  border-color: var(--primary);
}

.send-btn {
  display: flex;
  justify-content: center;
  align-items: center;
  background: var(--primary);
  border: none;
  border-radius: 50%;
  width: 44px;
  height: 44px;
  margin-left: 10px;
  cursor: pointer;
  transition: 0.3s ease;
  color: white;
  box-shadow: 0 3px 8px rgba(0, 122, 255, 0.3);
}

.send-btn:hover {
  background: #005fcc;
  transform: scale(1.05);
}

.send-icon {
  font-size: 18px;
  transform: rotate(45deg); /* efek miring kayak di WhatsApp */
}


  .message-container {
    display: flex;
    flex-direction: column;
    background: var(--bg);
    border-radius: 16px;
    border: 1px solid var(--border);
    width: 100%;
    height: 100vh;
    max-height: 100vh;
    overflow: hidden;
    font-family: 'Poppins', sans-serif;
    padding-top: 80px;
  }

  /* Header */
  .message-header {
      display: flex;
  align-items: center;
  padding: 10px 16px;
  background: white;
  border-bottom: 1px solid #eee;
  }
  .back-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 12px;
  cursor: pointer;
  border-radius: 50%;
  transition: background 0.2s;
}

.back-btn:hover {
  background: rgba(0, 0, 0, 0.05);
}

.back-btn svg {
  stroke: #333;
  width: 24px;
  height: 24px;
}

  .profile {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .avatar {
    background: var(--primary);
    color: #fff;
    font-weight: 600;
    font-size: 16px;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .info h4 {
    font-size: 16px;
    margin: 0;
    font-weight: 600;
  }

  .info .status {
    font-size: 13px;
    color: var(--primary);
  }

  /* Chat area */
  .message-body {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    color: var(--muted);
    position: relative;
  }

  .empty-message {
    text-align: center;
  }

  .empty-message i {
    font-size: 48px;
    color: var(--muted);
    margin-bottom: 10px;
  }

  .empty-message p {
    font-size: 15px;
    color: var(--muted);
  }

  /* Input area */
  .message-input {
    display: flex;
    align-items: center;
    border-top: 1px solid var(--border);
    padding: 10px 15px;
    background: #fff;
  }

  .message-input input {
    flex: 1;
    border: none;
    outline: none;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    color: var(--text);
  }

  .message-input input::placeholder {
    color: #9ca3af;
  }

  .send-btn {
    background: none;
    border: none;
    color: var(--primary);
    font-size: 20px;
    cursor: pointer;
    padding: 6px 10px;
    border-radius: 8px;
    transition: all 0.2s ease;
  }

  .send-btn:hover {
    background: rgba(0, 122, 255, 0.1);
  }

  /* Responsiveness */
  @media (max-width: 1024px) {
    .message-container {
      height: 100dvh;
      border-radius: 0;
    }

    .message-input {
      padding: 8px 12px;
    }

    .info h4 {
      font-size: 14px;
    }

    .avatar {
      width: 32px;
      height: 32px;
      font-size: 14px;
    }
  }

  @media (max-width: 600px) {
    .message-header {
      padding: 12px 15px;
    }

    .empty-message i {
      font-size: 36px;
    }

    .message-input input {
      font-size: 13px;
    }

    .send-btn {
      font-size: 18px;
    }
  }
</style>

<!-- JS (simulasi kirim pesan lokal) -->
<script>
  const input = document.getElementById('chatInput');
  const body = document.querySelector('.message-body');

  document.querySelector('.send-btn').addEventListener('click', () => {
    const text = input.value.trim();
    if (!text) return;
    body.innerHTML += `
      <div class="chat-bubble user">
        <p>${text}</p>
      </div>`;
    input.value = '';
  });
  const input = document.getElementById('chatInput');
const body = document.querySelector('.message-body');
const sendBtn = document.querySelector('.send-btn');

sendBtn.addEventListener('click', () => {
  const text = input.value.trim();
  if (!text) return;

  const message = document.createElement('div');
  message.className = 'chat-bubble user';
  message.innerHTML = `<p>${text}</p>`;
  body.appendChild(message);

  input.value = '';
  body.scrollTop = body.scrollHeight;
});

</script>
