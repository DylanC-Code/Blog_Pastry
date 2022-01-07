<?php
require_once 'C:\wamp64\www\Blog_Pastry\connectToDb.php';
$email = strtolower($_POST['email']);
$username = strtolower($_POST['username']);
$password = $_POST['password'];
$passwordVerif = $_POST['passwordVerif'];

$req = $db->query("SELECT `email`, `username` FROM `users` WHERE `email`='$email' OR `username`= '$username'");
$edit = $req->fetch(PDO::FETCH_ASSOC);

$emailDb = $edit['email'];
$usernameDb = $edit['username'];

function emailChecker($email, $emailDb)
{
    $regEmail = preg_match('/^(\w|\d){3,30}(@)[\w]{3,10}(.)(\w){2,4}$/', $email, $matches) ? true : false;

    if ($regEmail && $email !== $emailDb) {
        return true;
    } else if (!$regEmail) {
        header('location:\Blog_Pastry\register.php?email=emailInvalid');
        die();
    } else {
        header('location:\Blog_Pastry\register.php?email=emailAlreadyExist');
        die();
    }
}
function usernameChecker($username, $usernameDb)
{
    $regUsername = preg_match('/^[\w\d]{3,30}$/', $username) ? true : false;
    if ($regUsername && $username !== $usernameDb) {
        return true;
    } else if (!$regUsername) {
        header('location:\Blog_Pastry\register.php?username=usernameInvalid');
        die();
    } else {
        header('location:\Blog_Pastry\register.php?username=usernameAlreadyExist');
        die();
    }
}
function passwordChecker($password, $passwordVerif)
{
    $regPassword = preg_match('/^.{5,30}$/', $password) ? true : false;

    if ($password === $passwordVerif && $regPassword) {
        return true;
    } else if ($password !== $passwordVerif) {
        header('location:/Blog_Pastry/register.php?password=passwordsNotSame');
        die();
    } else {
        header('location:/blog_pastry/register.php?password=passwordInvalid');
        die();
    }
}
function newUser($email, $emailDb, $username, $usernameDb, $password, $passwordVerif, $db)
{
    if (usernameChecker($username, $usernameDb) && emailChecker($email, $emailDb) && passwordChecker($password, $passwordVerif)) {
        $hashPass = password_hash($password, PASSWORD_BCRYPT);
        $req = $db->query("INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email','$hashPass')");
        header('location:/blog_pastry/homePage.php');
    }
}

newUser($email, $emailDb, $username, $usernameDb, $password, $passwordVerif, $db);
