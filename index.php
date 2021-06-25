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
      <h1>full_house</h1>

      <span>1)</span>
      <p>
        <?
          printf('Заказов %s на сумму: %s. Из них профукано %s заказов на сумму: %s',
            count($orders), $profit, $lossOrdersInWeekends, $lossInWeekends
          );
        ?>
      </p>

      <span>2)</span>
      <p>
        <?
          echo "Для того, чтобы доставить все заказы, минимальное количество курьеров: $minCouriers";
        ?>
      </p>

      <span>3)</span>
      <p>
        <?
          echo "Заказов профукано из-за недостатка курьеров: $lossOrdersBecauseFewCouriers";
        ?>
      </p>
    </div>
  </body>
</html>
