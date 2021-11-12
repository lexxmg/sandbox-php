
<?php
  require $_SERVER['DOCUMENT_ROOT'] . '/php/sandbox.php';
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>bd</title>

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
        <h1 class="title">Запрос к базе данных</h1>

        <table class="table">
            <tr class="table__row">
                <th class="table__title">id</th>
                <th class="table__title">Товар</th>
                <th class="table__title">Цена</th>
                <th class="table__title">Описание</th>
            </tr>

            <?php foreach ($products as $key => $value): ?>
                <tr class="table__row">
                    <td class="table__column"><?=$value[0]?></th>
                    <td class="table__column"><?=$value[1]?></th>
                    <td class="table__column"><?=$value[2]?></th>
                    <td class="table__column"><?=$value[3]?></th>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
  </body>
</html>
