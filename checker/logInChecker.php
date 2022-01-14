<?php
require_once 'C:\wamp64\www\Blog_Pastry\connectToDb.php';

$emailUsername = $_POST['emailUsername'];
$password = $_POST['password'];

$req = $db->query("SELECT `email`, `user_name`, `password` FROM `users` WHERE `email` = '$emailUsername' OR `user_name` = '$emailUsername'");
$edit = $req->fetch(PDO::FETCH_ASSOC);

$emailDb = $edit['email'];
$usernameDb = $edit['user_name'];
$passwordDb = $edit['password'];

if (password_verify($password, $passwordDb)) {
    session_start();
    $_SESSION['connect'] = $usernameDb;
    header("location:/blog_pastry/homePage.php");
} else {
    header('location:/blog_pastry/logIn.php?error=passEmailIncorect');
}
