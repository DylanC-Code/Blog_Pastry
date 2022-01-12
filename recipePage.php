<?php require_once 'C:\wamp64\www\Blog_Pastry\connectToDb.php';
$id_recipe = $_GET['recipe'];

$req = $db->query("SELECT * FROM `recipes` WHERE `id_recipe` = '$id_recipe'");
$fetch = $req->fetch(PDO::FETCH_ASSOC);

ob_start();
echo 'Recipe';
$span = ob_get_clean();
ob_start();
echo "<h2>The Recipe</h2>";
$content = ob_get_clean();

ob_start();?>
<main>
  <section id="fullRecipe">
    <img src="<?=$fetch['image']?>" alt="<?=$fetch['recipe']?> picture">
    <article>
      <h1><?=$fetch['recipe']?></h1>
      <h2><?=$fetch['description']?></h2>
      <h3>by --&ensp;<?=$fetch['user_name']?></h3>
      <?php switch ($fetch['difficulty']) {
    case 1:echo "<img src='./assets/media/difficulty1' alt='etoile'>";
        break;
    case 2:echo "<img src='./assets/media/difficulty2' alt='etoile'>";
        break;
    case 3:echo "<img src='./assets/media/difficulty3' alt='etoile'>";
        break;}
for ($i = 1; $i !== 7; $i++) {?>
        <p class="ingredient">-&ensp;<?=$fetch["ingredient_" . $i]?></p>
      <?php }
?>
    </article>
  </section>
</main>
<?php $main = ob_get_clean();
require_once 'C:\wamp64\www\Blog_Pastry\assets\templateHeaderRedGradient.php';
