<?php
session_start();
if (isset($_SESSION['connect']) && $_SESSION['connect'] === 'admin') {
    $admin = "<img src='./assets/media/admin_logo' alt='logo admin'>";
}
require_once 'C:\wamp64\www\Blog_Pastry\connectToDb.php';

$req = $db->query("SELECT `id_recipe`,`image`, `recipe` FROM `recipes` ORDER BY `id_recipe` DESC LIMIT 6");
$edit = $req->fetchAll(PDO::FETCH_ASSOC);

ob_start();
foreach ($edit as $recipe) {?>
<a href="./recipePage.php?recipe=<?=$recipe['id_recipe']?>">
  <article>
    <img src="<?=$recipe['image']?>" alt="<?=$recipe['recipe']?>">
  </article>
</a>

<?php }
;
$content = ob_get_clean();

require_once 'C:\wamp64\www\Blog_Pastry\assets\templateAccueil.php';