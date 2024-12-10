<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>WhysApp</title>
  <link rel="icon" type="image/x-icon" href="/img/WhysAppLogo-removebg-preview.png">
  <!--CSS-->
  <link href="../style/MainPage.css" rel="stylesheet" type="text/css" />
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
        <h1>Register</h1>
      <?php if (!empty($error)): ?>
        <p><?= htmlspecialchars($error) ?></p>
      <?php endif; ?>
      <form method="POST">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="EmailAddress" placeholder="Email Address" required>
        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="FullName" placeholder="Full Name" required>
        <label for="phoneNumber">Phone Number</label>
        <input type="text" id="phoneNumber" name="PhoneNumber" placeholder="Phone Number" required>
        <label for="password">Create Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" id="confirmPassword" name="ConfirmPassword" placeholder="Reconfirm Password" required>
        <button type="submit">Register</button>
      </form>
      <a class="btn">Sign Up!</a>
      </div>
    </div>
  </section>
<?php
require_once '../functions.php';
$error = '';
handleRegistration($error);
?>
</body>
</html>
