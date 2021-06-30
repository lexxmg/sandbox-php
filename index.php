<?php
  include('php/sandbox.php');
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
      <h1>Поиск max в двумерном массиве</h1>

      <pre>
        <? var_dump($matrix); ?>
      </pre>

      <ul>
        <? for ($i=0; $i < count($matrix); $i++): ?>
          <li><?=implode(', ', $matrix[$i])?></li>
        <? endfor ?>
      </ul>

      <p>
        <?
          printf('Максимальное значение: %s на строке: %s в столбце: %s',
            $matrix[$row][$column], $row + 1, $column + 1
          );
        ?>
      </p>
    </div>
  </body>
</html>
