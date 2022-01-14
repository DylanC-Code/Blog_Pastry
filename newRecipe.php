<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/logs.css">
    <script src="./resumeRecipe.js" defer></script>
    <title>New recipe</title>
  </head>
  <body>
      <?php
ob_start();?>
        <h2>New Creation</h2>
      <?php
$content = ob_get_clean();

ob_start()?>

<main>
    <div>
      <h1>Make your recipe !</h1>
      <form action="recipeValidator.php" method="POST">
        <fieldset>
          <input type="text" name="recipe" placeholder="Enter the Name" required>
          <input type="text" name="description" placeholder="Enter a Description" required>
          <label for="image">Choose a Picture</label>
          <input type="file" name="image" id="image" placeholder="Link a Picture" required>
        </fieldset>
        <fieldset>
          <input type="text" name="ing1" placeholder="Ingredient 1" class="ingredient">
          <input type="text" name="ing2" placeholder="Ingredient 2" class="ingredient">
          <input type="text" name="ing3" placeholder="Ingredient 3" class="ingredient">
          <input type="text" name="ing4" placeholder="Ingredient 4" class="ingredient">
          <input type="text" name="ing5" placeholder="Ingredient 5" class="ingredient">
          <input type="text" name="ing6" placeholder="Ingredient 6" class="ingredient">
        </fieldset>
        <fieldset>
          <h3>Difficulty</h3>
          <input type="radio" name="difficulty" value="1" id="lvl1" required checked><label for="lvl1">1</label>
          <input type="radio" name="difficulty" value="2" id="lvl2" required><label for="lvl2">2</label>
          <input type="radio" name="difficulty" value="3" id="lvl3" required><label for="lvl3">3</label>
          <h3>Category</h3>
          <input type="radio" name="category" value="1" id="pies" required checked><label for="pies">Pie</label>
          <input type="radio" name="category" value="2" id="macaroons" required><label for="macaroons">Macaroon</label>
          <input type="radio" name="category" value="3" id="cakes" required><label for="cakes">Cake</label>
        </fieldset>
        <input type="submit" value="SUBMIT">
      </form>
    </div>
    <div class='dynamicCard'>
      <img id="imgRecipe">
      <h1></h1>
      <div id="icon">
        <img alt="difficulty" src="./assets/media/difficulty1.png">
      </div>
      <hr>
      <p id="description"></p>
    <p class='ingredientRes'></p>
    <p class='ingredientRes'></p>
    <p class='ingredientRes'></p>
    <p class='ingredientRes'></p>
    <p class='ingredientRes'></p>
    <p class='ingredientRes'></p>
  </div>
</main>
</body>
</html>
<?php
$main = ob_get_clean();
require_once 'C:\wamp64\www\Blog_Pastry\assets\templateHeaderRedGradient.php';