<?php
require_once '../functions.php';
$response = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userInput = $_POST['message'] ?? '';
    $response = handleChatResponse($userInput);
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WhysApp - Chat</title>
  <style>
    html, body {
      font-family: Arial, sans-serif;
      height: 100%;
      width: 100%;
      background: linear-gradient(
        24deg,
        rgba(150, 250, 207) 18%,
        rgba(106, 158, 136) 45%,
        rgba(54, 125, 95) 110%
      );
    }

    .chatcontains{
      display: grid;
      place-content: center;
    }

    .chat-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 600px;
      background: linear-gradient(
        190deg,
        rgba(150, 250, 207) 18%,
        rgba(106, 158, 136) 45%
      );
      border-radius: 8px;
      padding: 10px;
    }

    .chat-container h1 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
    }

    .chat-log {
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 10px;
      height: 100px;
      overflow-y: auto;
      background: #fafafa;
      margin-bottom: 20px;
    }

    form {
      display: flex;
      gap: 10px;
    }

    input[type="text"] {
      flex: 1;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    button {
      padding: 10px 20px;
      border: none;
      background: black;
      color: white;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background: green;
    }
  </style>
</head>

<body>
  <section class="chatcontains">
  <div class="chat-container">
    <h1>Chatroom</h1>
    <div class="chat-log">
      <?php if (!empty($response)): ?>
        <p><strong>Bot:</strong> <?= htmlspecialchars($response) ?></p>
      <?php endif; ?>
    </div>
    <form method="POST">
      <input type="text" name="message" placeholder="Type your message..." required>
      <button type="submit">Send</button>
    </form>
  </div>
  </section>
</body>

</html>
