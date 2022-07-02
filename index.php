
<?php
  require $_SERVER['DOCUMENT_ROOT'] . '/php/sandbox.php';
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>OOP php</title>

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
        <h1>Наследование</h1>

        <pre>
            <?php $accountant->showEmployeeInfo()?>
        </pre>

        <pre>
            <?php $accountant->prepareReport()?>
        </pre>

        <h2>Абстрактные классы</h2>

        <pre>
            <?php $car->move()?>
        </pre>

        <pre>
            <?php $bicycle->move()?>
        </pre>

        <h2>Трейты</h2>

        <pre>
            <?php $fantomasCar->escape()?>
        </pre>

        <pre>
            <?php $carTr->ride()?>
        </pre>

        <pre>
            <?php $carTr->move()?>
        </pre>

        <pre>
            <?php $carTr->moveTr()?>
        </pre>
    </div>
  </body>
</html>
