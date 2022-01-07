<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=blog_pastry', 'root');
} catch (Exception $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
