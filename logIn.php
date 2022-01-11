<?php
ob_start();
?>

<form action="./checker/logInChecker.php" method="POST">
  <fieldset>
    <legend>Log In</legend>
    <div>
      <label for="emailUsername">Email or Username :</label>
      <input type="text" name="emailUsername" id="emailUsername" required>
    </div>
    <div>
      <label for="password">Password :</label>
      <input type="password" name="password" id="password" required>
    </div>
    <input type="submit" value="Log In">
  </fieldset>
</form>

<?php
$content = ob_get_clean();

require_once 'C:\wamp64\www\Blog_Pastry\assets\templateLogs.php';