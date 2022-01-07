<?php

require_once 'C:\wamp64\www\Blog_Pastry\connectToDb.php';

$req = $db->query("SELECT `image`, `recipe` FROM `recipes` ORDER BY `id_article` DESC LIMIT 6");
$edit = $req->fetchAll(PDO::FETCH_ASSOC);

ob_start();
foreach ($edit as $recipe) {?>

  <article>
    <img src="<?=$recipe['image']?>" alt="<?=$recipe['recipe']?>">
  </article>

<?php }
;
$content = ob_get_clean();

require_once 'C:\wamp64\www\Blog_Pastry\assets\templateAccueil.php';