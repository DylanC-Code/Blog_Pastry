<?php
require_once 'C:\wamp64\www\Blog_Pastry\connectToDb.php';

$recipe = $_POST['recipe'];
$description = $_POST['description'];
$image = './assets/media/' . $_POST['image'];
$difficulty = $_POST['difficulty'];
$ing1 = $_POST['ing1'];
$ing2 = $_POST['ing2'];
$ing3 = $_POST['ing3'];
$ing4 = $_POST['ing4'];
$ing5 = $_POST['ing5'];
$ing6 = $_POST['ing6'];

$req = $db->query("INSERT INTO `recipes` (`recipe`, `description`,`difficulty`,`image`,`ingredient_1`, `ingredient_2`, `ingredient_3`, `ingredient_4`, `ingredient_5`, `ingredient_6`) VALUES ('$recipe','$description','$difficulty','$image','$ing1', '$ing2', '$ing3', '$ing4', '$ing5', '$ing6')");

header('location:/blog_pastry/homePage.php');
