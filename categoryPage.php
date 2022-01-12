<?php
require_once 'C:\wamp64\www\Blog_Pastry\connectToDb.php';

$category = $_GET['category'];

$req = $db->query("SELECT `recipe`, `difficulty`, 'user_name', `image` FROM `recipes` INNER JOIN `categories` ON `recipes`.`category` = `categories`.`id_category` WHERE `categories`.`category_name` = '$category'");
$fetch = $req->fetchAll(PDO::FETCH_ASSOC);
////////////////////////
//////// HEADER ////////
////////////////////////
ob_start();
echo 'Category';
$span = ob_get_clean();

ob_start();

switch ($category) {
    case 'Pies':echo "<img src='./assets/media/tarte-framboises' alt='pie-category'>";
        break;
    case 'Macaroons':echo "<img src='./assets/media/macaroons' alt='macaroons-category'>";
        break;
    case 'Cakes':echo "<img src='./assets/media/cupcaker' alt='cupcaker-category'>";
        break;
}

?>
<h2><?=$category;?></h2>
<?php $content = ob_get_clean();

////////////////////////
///////// MAIN /////////
////////////////////////
ob_start();?>
<main id="mainCategory">

  <section>
    <?php
switch ($category) {
    case 'Pies':
        echo "<h1>Wath Is a Pie</h1>";
        echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi unde recusandae ex? In dignissimos magni ab, nam et ullam cumque?</p>";
        break;
    case 'Macaroons':
        echo "<h1>Wath Is a Macaroon</h1>";
        echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi unde recusandae ex? In dignissimos magni ab, nam et ullam cumque?</p>";
        break;
    case 'Cakes':
        echo "<h1>Wath Is a Cake</h1>";
        echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi unde recusandae ex? In dignissimos magni ab, nam et ullam cumque?</p>";
        break;
}
?>
  </section>
  <section>
    <h1>Discover Our Best Sellors</h1>
    <div>
    <?php foreach ($fetch as $recipe) {?>
      <div class="card">
        <img src="<?=$recipe['image']?>" alt="recipe photo">
        <h1><?php echo $recipe['recipe'] ?></h1>
        <h2><?php echo $recipe['user_name'] ?></h2>
          <?php
switch ($recipe['difficulty']) {
    case 1:echo "<img src='./assets/media/difficulty1' alt='etoile'>";
        break;
    case 2:echo "<img src='./assets/media/difficulty2' alt='etoile'>";
        break;
    case 3:echo "<img src='./assets/media/difficulty3' alt='etoile'>";
        break;
}?>
      </div>
<?php }?>
    </div>
  </section>
  <section>
    <h1>Recipes Of The Same Category</h1>
  </section>
  <section>
    <?php foreach ($fetch as $recipe) {?>
    <div class="card">
      <img src="<?=$recipe['image']?>" alt="recipe photo">
      <h1><?php echo $recipe['recipe'] ?></h1>
      <h2><?php echo $recipe['user_name'] ?></h2>
          <?php
switch ($recipe['difficulty']) {
    case 1:echo "<img src='./assets/media/difficulty1' alt='etoile'>";
        break;
    case 2:echo "<img src='./assets/media/difficulty2' alt='etoile'>";
        break;
    case 3:echo "<img src='./assets/media/difficulty3' alt='etoile'>";
        break;
}?>
    </div>
    <?php }?>
  </section>
</main>
<?php
$main = ob_get_clean();
require_once 'C:\wamp64\www\Blog_Pastry\assets\templateHeaderRedGradient.php';?>