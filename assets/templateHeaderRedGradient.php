<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/logs.css">

  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <title>Logs</title>
</head>
<body>
<header>
<?php if (isset($admin)) {echo $admin;}
?>
  <div class="logoContainer">
    <img src="./assets\media\logo.png" alt="Logo">
    <h1>The pastry <span>differently<br>
    </span>
    <?php
if (isset($span)) {
    echo $span;
}
?>
    </h1>

  </div>
  <?=
    $content;
?>
</header>
<?php
if (isset($main)) {
    echo $main;
}?>
<footer>
    <div>
      <a href=""><img src="assets\media\twitter.png" alt="logo twitter"></a>
      <a href=""><img src="assets\media\fb.png" alt="logo fb"></a>
      <a href=""><img src="assets\media\instagram.png" alt="logo instagram"></a>
      <a href=""><img src="assets\media\github.png" alt="logo github"></a>
    </div>
    <ul>
      <li><a href="./homePage.php">HomePage</a></li>
      <li><a href="./logIn.php">Log In</a></li>
      <li><a href="./register.php">Register</a></li>
      <li><a href="">CGU</a></li>
    </ul>
    <div>
      <p>© Pastry Freak. All rights reserved.</p>
      <p>Design with ❤️ by DylanC_Code</p>
    </div>
  </footer>
</body>
</html>
