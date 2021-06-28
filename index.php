<?php
  include('php/sandbox.php');
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Подсчет различных букв в слове</title>

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
      <h1>Подсчет различных букв в слове</h1>

      <pre>
        <?
          var_dump($strArr);
          var_dump($countElement);
        ?>
      </pre>

      <p>В строке <?=$line?>:</p>

      <ul>
        <? foreach ($countElement as $key => $item): ?>
          <li><?='Колличество символов ' . $key . ' - ' . $item?></li>
        <? endforeach ?>
      </ul>
    </div>
  </body>
</html>
