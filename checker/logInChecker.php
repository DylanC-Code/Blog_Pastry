<?php
require_once 'C:\wamp64\www\Blog_Pastry\connectToDb.php';

$emailUsername = $_POST['emailUsername'];
$password = $_POST['password'];

$req = $db->query("SELECT `email`, `username`, `password` FROM `users` WHERE `email` = '$emailUsername' OR `username` = '$emailUsername'");
$edit = $req->fetch(PDO::FETCH_ASSOC);

$emailDb = $edit['email'];
$usernameDb = $edit['username'];
$passwordDb = $edit['password'];

if (password_verify($password, $passwordDb)) {
    header("location:/blog_pastry/homePage.php?username=$usernameDb");
} else {
    header('location:/blog_pastry/logIn.php?error=passEmailIncorect');
}
