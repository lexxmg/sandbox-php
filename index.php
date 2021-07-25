<?php
  require ($_SERVER['DOCUMENT_ROOT'] . '/php/sandbox.php');
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Обрезание строки</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/master.css">

    <link rel="stylesheet" href="lib/slick/slick-theme.css">
    <link rel="stylesheet" href="lib/slick/slick.css">

    <script src="lib/jQuery/jquery-3.5.1.min.js" defer></script>
    <script src="lib/slick/slick.min.js" defer></script>
    <script src="js/script.js" defer></script>
  </head>

  <body>
    <div class="fixed-container">
        <h1 class="tiile">Обрезание строки</h1>

        <p class="text">До:</p>

        <ul class="list">
            <?php foreach ($data as $item): ?>
                <li class="list__item"><?=$item?></li>
            <?php endforeach; ?>
        </ul>

        <p class="text">После:</p>

        <ul class="list">
            <?php foreach ($result as $item): ?>
                <li class="list__item"><?=$item?></li>
            <?php endforeach; ?>
        </ul>
    </div>
  </body>
</html>
