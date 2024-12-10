<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>WhysApp</title>
  <link rel="icon" type="image/x-icon" href="/img/WhysAppLogo-removebg-preview.png">
  <!--CSS-->
  <link href="style/MainPage.css" rel="stylesheet" type="text/css" />
  <!--Fonts-->
    <!--Bebas Neue-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!--DM Sans-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
  <!--JavaScript-->
  <script src="script.js"></script>
</head>

<body>
  <h1 class="logotext">WhysApp</h1>

  <section class="loginContainer">
    <div>
      <div>
         <h1>Login</h1>
      <?php if (!empty($error)): ?>
        <p><?= htmlspecialchars($error) ?></p>
      <?php endif; ?>
      <form method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
        <button type="submit">Login</button>
      </form>
      <p>new to WhysApp? Sign up Below</p>
          <a class="btn" href="./pages/register.php">Sign Up!</a>
    </div>
  </div>
</section>
<?php
require_once 'functions.php'; // Include the reusable functions
$error = ''; // Initialize error variable
handleLogin($error); // Call the login handler
?>
</body>
</html>
