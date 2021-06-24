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
      <h1>cycles_and_arrays</h1>

      <span>1)</span>
      <pre>
        <?
          var_dump($boringToys);
        ?>
      </pre>

      <span>2)</span>
      <pre>
        <?
          var_dump($cars);
        ?>
      </pre>

      <span>3)</span>
      <pre>
        <?
          echo "$sum";
        ?>
      </pre>

      <span>4)</span>
      <pre>
        <?
          var_dump($cars);
        ?>
      </pre>

      <span>5)</span>
      <p>
        <?
          foreach ($cars as $key => $value) {
            foreach ($value['colors'] as $colors) {
              printf( 'Автомобиль %s цвета %s всего за: %s руб <br>',
              $cars[$key]['name'], $colors['name'], ($colors['extra'] + $cars[$key]['price']) );
            }
          }
        ?>
      </p>
    </div>
  </body>
</html>
