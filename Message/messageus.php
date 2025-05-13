<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Message Us</title>
  <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="message.css">
</head>
<body>
  <div class="container mt-5">
    <ul class="nav nav-tabs" id="messageTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="form-tab" data-bs-toggle="tab" data-bs-target="#form" type="button" role="tab">Message Us</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab">Messages</button>
      </li>
    </ul>

    <div class="tab-content pt-4" id="messageTabContent">
      <div class="tab-pane fade show active" id="form" role="tabpanel">
        <form id="messageForm">
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" id="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>

      <div class="tab-pane fade" id="messages" role="tabpanel">
        <div id="messageList" class="mt-3"></div>
      </div>
    </div>
  </div>

  <script>
    const messageForm = document.getElementById("messageForm");
    const messageList = document.getElementById("messageList");
    const messages = [];

    messageForm.addEventListener("submit", function(e) {
      e.preventDefault();
      
      const name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const message = document.getElementById("message").value;

      messages.push({ name, email, message });
      messageForm.reset();
      renderMessages();
    });

    function renderMessages() {
      messageList.innerHTML = "";

      if (messages.length === 0) {
        messageList.innerHTML = "<p>No messages yet.</p>";
        return;
      }

      messages.forEach((msg, index) => {
        const card = document.createElement("div");
        card.className = "card mb-3";
        card.innerHTML = `
          <div class="card-body">
            <h5 class="card-title">${msg.name}</h5>
            <h6 class="card-subtitle mb-2 text-muted">${msg.email}</h6>
            <p class="card-text">${msg.message}</p>
          </div>
        `;
        messageList.appendChild(card);
      });
    }
  </script>
  <script src="../Assets/js/bootstrap.bundle.js"></script>
</body>
</html>
