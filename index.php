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
      <h1>Cycles</h1>

      <span>1)</span>
      <pre>
        <?
          for ($i = 0; $i <= 9; $i++) {
            echo $i;
          }
        ?>
      </pre>

      <span>2)</span>
      <pre>
        <?
          for ($i = 0; $i < 10; $i++) {
            echo rand(1, 10);
          }
        ?>
      </pre>

      <span>3)</span>
      <pre>
        <?
          var_dump($items);
        ?>
      </pre>

      <span>4)</span>
      <pre>
        <?
          echo 'Длинна массива numbers = ' . count($numbers);
        ?>
      </pre>

      <span>5)</span>
      <ul>
        <li><? echo 'Общая сумма массива numbers = ' . array_sum($numbers); ?></li>
        <li><? echo "Из нее часть, которая приходится на четные числа = $evenNumber"; ?></li>
        <li><? echo 'И часть из нечетных чисел = ' . (array_sum($numbers) - $evenNumber); ?></li>
      </ul>
    </div>
  </body>
</html>
