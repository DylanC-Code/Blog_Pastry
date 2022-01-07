<?php
ob_start();
?>

<form action="./checker/registerChecker.php" method="POST">
  <fieldset>
    <legend>Register</legend>
    <div>
      <label for="email">Email :</label>
      <input type="email" name="email" id="email" required>
    </div>
    <div>
      <label for="username">Username :</label>
      <input type="text" name="username" id="username" required>
    </div>
    <div>
      <label for="password">Password :</label>
      <input type="password" name="password" id="password" required>
    </div>
    <div>
      <label for="passwordVerif">Confirm pass :</label>
      <input type="password" name="passwordVerif" id="passwordVerif" required>
    </div>
    <input type="submit" value="I register">
  </fieldset>
</form>

<?php
$contentLogs = ob_get_clean();

require_once 'C:\wamp64\www\Blog_Pastry\assets\templateLogs.php';