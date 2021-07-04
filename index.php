<?php
  require('php/sandbox.php');
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Машины</title>

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
      <ul>
        <?php foreach ($cars as $key => $value): ?>
          <?php if (
                  $value['kilometer'] <= $city1 + $city1Radius && $value['kilometer'] >= $city1 - $city1Radius ||
                  $value['kilometer'] <= $city2 + $city2Radius && $value['kilometer'] >= $city2 - $city2Radius
                ): ?>
            <li>Машина <?=$value['car']?> едет по городу на <?=$value['kilometer']?> км со скоростью не более 70"</li>
          <?php else: ?>
            <li>Машина <?=$value['car']?> едет за городом <?=$value['kilometer']?> км со скоростью не более 90"</li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>

      <div class="highway">
        <?php foreach ($cars as $key => $value): ?>
          <?php $currentCar = 1;?>
          <div class="highway__item"
            style=<?php
            //$nextCar = ( array_key_exists($key + 1, $cars) ) ? $key + 1 : $key;

            if ($cars[$currentCar]['kilometer'] - $cars[$key]['kilometer'] <= 40) {
              $currentCar = $key;
            }
              printf('"left: %spx; top: %spx" ',
                $cars[$key]['kilometer'],
                ($cars[$currentCar]['kilometer'] - $cars[$key]['kilometer'] <= 40) ? 0 : 30);
            ?>
            ><?=$value['car']?>
          </div>
        <?php endforeach; ?>

        <div class="highway__city1"></div>
        <div class="highway__city2"></div>
      </div>
    </div>
  </body>
</html>
