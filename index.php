<?php
  require ('php/sandbox.php');
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Магазин</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="lib/slick/slick-theme.css">
    <link rel="stylesheet" href="lib/slick/slick.css">

    <script src="lib/jQuery/jquery-3.5.1.min.js" defer></script>
    <script src="lib/slick/slick.min.js" defer></script>
    <script src="js/script.js" defer></script>
  </head>

  <body>
    <div class="menu">
      <div class="container">
          <ul>
              <li><a href="index.php">Главная</a></li>
              <li><a href="about.php">О нас</a></li>
          </ul>
      </div>
    </div>

    <div class="container">
      <h1>Каталог</h1>

      <div class="items">
        <figure>
          <p><img src="img/glass.jpeg" alt="" /></p>
          <figcaption>Стакан граненый</figcaption>
          <a href="form.php" class="btn">Купить</a>
        </figure>
        <figure>
          <p><img src="img/hat.jpg" alt="" /></p>
          <figcaption>Шапка ушанка</figcaption>
          <a href="form.php" class="btn">Купить</a>
        </figure>
        <figure>
          <p><img src="img/pony.jpg" alt="" /></p>
          <figcaption>Пони</figcaption>
          <a href="form.php" class="btn">Купить</a>
        </figure>
      </div>
    </div>
  </body>
</html>
