<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/sandbox.php'?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Объединение данных</title>

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/master.css">

    <link rel="stylesheet" href="lib/slick/slick-theme.css">
    <link rel="stylesheet" href="lib/slick/slick.css">

    <script src="lib/jQuery/jquery-3.5.1.min.js" defer></script>
    <script src="lib/slick/slick.min.js" defer></script>
    <script src="js/script.js" defer></script>
  </head>

  <body>
    <br>
    <br>
    <hr>

    <div class="fixed-container">
        <h2>Users</h2>

        <pre><?php //var_dump($resultProductsas)?></pre>

        <table style="border: 1px; border-style: solid; border-color: black; border-collapse: collapse;">
            <tr>
                <?php foreach ($rowResult[0] as $key => $title): ?>
                    <th style="border: 1px; border-style: solid; border-color: black; padding: 5px;">
                        <?=$key?>
                    </th>
                <?php endforeach; ?>
            </tr>

            <?php foreach ($rowResult as $i => $value): ?>
                <tr>
                    <?php foreach ($value as $j => $column): ?>
                        <td style="border: 1px; border-style: solid; border-color: black; padding: 5px;">
                            <?=($column == null) ? 'нет описания' : $column?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>

        <h2>ip</h2>

        <pre><?php //var_dump($resultIp)?></pre>

        <table style="border: 1px; border-style: solid; border-color: black; border-collapse: collapse;">
            <tr>
                <?php foreach ($resultIp[0] as $key => $value): ?>
                    <th style="border: 1px; border-style: solid; border-color: black; padding: 5px;">
                        <?=$key?>
                    </th>
                <?php endforeach; ?>
            </tr>

            <?php foreach ($resultIp as $i => $row): ?>
                <tr>
                    <?php foreach ($row as $j => $value): ?>
                        <td style="border: 1px; border-style: solid; border-color: black; padding: 5px;">
                            <?php if ($value == null): ?>
                                свободный
                            <?php else: ?>
                                <?=$value?>
                            <?php endif; ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>

        <h2>ip users</h2>

        <table style="border: 1px; border-style: solid; border-color: black; border-collapse: collapse;">
            <tr>
                <?php foreach ($resultIpUsers[0] as $key => $title): ?>
                    <th style="border: 1px; border-style: solid; border-color: black; padding: 5px;">
                        <?=$key?>
                    </th>
                <?php endforeach; ?>
            </tr>

            <?php foreach ($resultIpUsers as $i => $value): ?>
                <tr>
                    <?php foreach ($value as $j => $column): ?>
                        <td style="border: 1px; border-style: solid; border-color: black; padding: 5px;">
                            <?=($column == null) ? 'свободный' : $column?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
  </body>
</html>
