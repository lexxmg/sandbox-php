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
      <span>1)</span>
      <pre>
        <?php
          if ($value > 5)
          {
            echo "'Полученное число больше 5' $value";
          } else {
            echo $value;
          }
        ?>
      </pre>

      <span>2)</span>
      <pre>
        <?php
          if ($timeToLearn)
          {
            echo "Я как раз сейчас и учусь";
          } else {
            echo "Что? Нет, для учебы всегда есть время";
          }
        ?>
      </pre>

      <span>3)</span>
      <pre>
        <?
          if ($hour < 8)
          {
            echo "В это время нужно спать $hour";
          } elseif ($hour < 21) {
            echo "В это время занимайтесь полезными делами, или поспите после обеда $hour";
          } else {
            echo "Самое время готовиться ко сну $hour";
          }
        ?>
      </pre>

      <span>5)</span>
      <pre>
        <?
          $a = rand(1, 5);
          $b = rand(1, 5);
          $c = rand(1, 5);

          if ($a + $b > $c && $a + $c > $b && $c + $b > $a) {
            echo "Треугольник со сторонами $a $b $c существует";
          } else {
            echo "Невозможно создать треугольник со сторонами $a $b $c";
          }
        ?>
      </pre>

      <span>6)</span>
      <pre>
        <?
          if ($dayNumber === 1 || $dayNumber === 7) {
            echo "Выходной $dayNumber $dayArrName[$dayNumber]";
          } else {
            echo "Будни $dayNumber $dayArrName[$dayNumber]";
          }
        ?>
      </pre>
    </div>
  </body>
</html>
