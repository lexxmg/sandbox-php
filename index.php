<?php
  require('php/sandbox.php');
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>task3</title>

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
      <h1 class="title <?=!$red ?: 'title--red'?>"><?=$title?></h1>

      <div class="authors">Авторов на портале <?=count($result3['authors'])?></div>

      <?php foreach ($result3['books'] as $key => $value): ?>
        <p class="text">
          Книга <?=$value['name']?>, ее написал <?php
                printf('%s %s %s',
                    $result3['authors'][$value['email']]['fullName'],
                    $result3['authors'][$value['email']]['yearOfBirth'],
                    $value['email']
                );
           ?>
        </p>
      <?php endforeach ?>

    </div>
  </body>
</html>
