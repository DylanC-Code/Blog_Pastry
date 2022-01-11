const recipe = document.querySelector("input[name=recipe]");
const description = document.querySelector("input[name=description]");
const image = document.querySelector("input[name=image]");
const difficultys = document.querySelectorAll("input[type=radio]");
const ingredients = [...document.getElementsByClassName("ingredient")];
const ingredientsRes = [...document.getElementsByClassName("ingredientRes")];
const imgDifficulty = document.querySelector('img[alt="difficulty"]');

e = [];

recipe.addEventListener("input", () => {
  document.querySelector(".card h1").textContent = recipe.value;
});
description.addEventListener("input", () => {
  document.querySelector("#description").textContent = description.value;
});
image.addEventListener("input", () => {
  e = image.value.split("\\");
  console.log(image);
  img = `./assets/media/${e[e.length - 1]}`;
  console.log(img);
  document.querySelector("#imgRecipe").src = img;
  document.querySelector('label[for="image"]').textContent = img;
});
difficultys.forEach((difficulty, i) => {
  difficulty.addEventListener("input", () => {
    imgDifficulty.src = `./assets/media/difficulty${i + 1}.png`;
  });
});
ingredients.forEach((ingredient, i) => {
  ingredient.addEventListener("input", () => {
    ingredientsRes[i].textContent = ingredient.value;
  });
});
