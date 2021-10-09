<?php
  require ('php/sandbox.php');
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>sandbox php</title>

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
      <h1 class="title">Запись и чтение файла</h1>

      <h2 class="subtitle">Проверка на существование файла</h2>
      <span class="text"><?php var_dump( file_exists($pathToFile) )?></span>

      <h2 class="subtitle">Проверка на существование файла и возможность записывать в него</h2>
      <span class="text"><?php var_dump( is_writable($pathToFile) )?></span>
    </div>
  </body>
</html>
