<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pastry">

  <link rel="stylesheet" href="./assets/style.css">
  <title>Pastry Freak</title>
</head>
<body>
  <header id="homePageHeader">
    <h1><pre>Welcome to Pastry Freak
        <em>The pastry</em> differently</pre>
    </h1>
  </header>
  <main>
    <section>
      <h1>Pastry Freak is a free pastry recipe site</h1>
      <p>Fusce non est mi. Nullam eu ipsum dictum, imperdiet quam et, feugiat ipsum. Donec at convallis elit. Vivamus mattis pulvinar commodo. Nullam varius eros eu orci imperdiet euismod. Praesent auctor, lectus ut scelerisque vehicula.</p>
    </section>

    <section>
      <div class="categoriesContainer">
        <article>
          <div class="logoCategory"><a href="./categoryPage.php?category=Pies"></a></div>
          <h1>Pies</h1>
          <p>Cras at dignissim erat. Sed vel massa vitae massa dignissim accumsan. Etiam aliquet placerat lacus, sed tempus lacus ornare at.</p>
        </article>
        <article>
          <div class="logoCategory"><a href="./categoryPage.php?category=Macaroons"></a></div>
          <h1>Macaroons</h1>
          <p>Cras at dignissim erat. Sed vel massa vitae massa dignissim accumsan. Etiam aliquet placerat lacus, sed tempus lacus ornare at.</p>
        </article>
      <article>
        <div class="logoCategory"><a href="./categoryPage.php?category=Cakes"></a></div>
        <h1>Cakes</h1>
        <p>Cras at dignissim erat. Sed vel massa vitae massa dignissim accumsan. Etiam aliquet placerat lacus, sed tempus lacus ornare at.</p>
      </article>
    </div>
    </section>

    <section>
    <h1>Discover our last achievements</h1>
    <p>Fusce non est mi. Nullam eu ipsum dictum, imperdietquam et, feugiat ipsum. Donec at convallis elit. Vivamusmattis pulvinar commodo. Nullam varius eros eu orciimperdiet euismod. Praesent auctor, lectus utscelerisque vehicula.
    </p>
    </section>

    <section>
      <div>
        <h1>Augue vivamus sed ipsum commodo lorem dolor</h1>
        <p>Gravida dis placerat lectus ante vel nunc euismod est turpis sodales. Diam tempor dui lacinia eget ornare varius gravida. Gravida nisi eu eget ornare varius gravida euismod. Gravida dis lorem ipsum dolor placerat magna tempus feugiat.<br><br>
        Lectus ante vel nunc euismod est turpis sodales. Diam tempor dui lacinia accumsan vivamus augue cubilia vivamus nisi eu eget ornare.</p>
        <a href="#" class="ancre-btn">More Recipes</a>
      </div>
      <div class="content">
        <?=
    $content;
?>
      </div>
    </section>
  </main>
  <footer>
    <div>
      <a href="#"><img src="assets\media\twitter.png" alt="logo twitter"></a>
      <a href="#"><img src="assets\media\fb.png" alt="logo fb"></a>
      <a href="#"><img src="assets\media\instagram.png" alt="logo instagram"></a>
      <a href="#"><img src="assets\media\github.png" alt="logo github"></a>
    </div>
    <ul>
      <li><a href="./register.php">Register</a></li>
      <li><a href="./logIn.php">Log In</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">CGU</a></li>
    </ul>
    <div>
      <p>© Pastry Freak. All rights reserved.</p>
      <p>Design with ❤️ by DylanC_Code</p>
    </div>
  </footer>
</body>
</html>
