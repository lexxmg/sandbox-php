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
      <h1>Покупка</h1>

      <p class="success">
        Ваша покупка оформлена
      </p>

      <p class="error">
        Нужно выбрать товар и заполнить ваше фио
      </p>

      <div class="items">
        <figure>
          <p><img src="img/glass.jpeg" alt="" /></p>
          <figcaption>Стакан граненый</figcaption>
        </figure>
      </div>

      <form action="">
        <label>
          Ваше ФИО:
          <input type="text" placeholder="Введите ваше фио">
        </label>
        <input type="submit" class="btn" value="Купить">
      </form>
    </div>
  </body>
</html>
