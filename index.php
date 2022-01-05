<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/sandbox.php'?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Подготовленные запросы</title>

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/master.css">

    <link rel="stylesheet" href="lib/slick/slick-theme.css">
    <link rel="stylesheet" href="lib/slick/slick.css">

    <script src="lib/jQuery/jquery-3.5.1.min.js" defer></script>
    <script src="lib/slick/slick.min.js" defer></script>
    <script src="js/script.js" defer></script>
  </head>

  <body>
    <div class="fixed-container">
        <h2>stock</h2>

        <pre><?php //var_dump($stock)?></pre>

        <table style="border: 1px; border-style: solid; border-color: black; border-collapse: collapse;">
            <tr>
                <?php foreach ($stock[0] as $key => $title): ?>
                    <th style="border: 1px; border-style: solid; border-color: black; padding: 5px;">
                        <?=$key?>
                    </th>
                <?php endforeach; ?>
            </tr>

            <?php foreach ($stock as $i => $value): ?>
                <tr>
                    <?php foreach ($value as $j => $column): ?>
                        <td style="border: 1px; border-style: solid; border-color: black; padding: 5px;">
                            <?=($column == null) ? 'нет описания' : $column?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>

        <h2>products</h2>

        <pre><?php //var_dump($productsAll)?></pre>

        <table style="border: 1px; border-style: solid; border-color: black; border-collapse: collapse;">
            <tr>
                <?php foreach ($products[0] as $key => $title): ?>
                    <th style="border: 1px; border-style: solid; border-color: black; padding: 5px;">
                        <?=$key?>
                    </th>
                <?php endforeach; ?>
            </tr>

            <?php foreach ($products as $i => $value): ?>
                <tr>
                    <?php foreach ($value as $j => $column): ?>
                        <td style="border: 1px; border-style: solid; border-color: black; padding: 5px;">
                            <?=($column == null) ? 'нет описания' : $column?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
  </body>
</html>
