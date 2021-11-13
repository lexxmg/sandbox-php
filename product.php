
<?php
  require $_SERVER['DOCUMENT_ROOT'] . '/php/sandbox.php';
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>product</title>

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
        <h1 class="title">Подукт</h1>
        <a href="/">Назад</a>

         <h2 class="subtitle">Название: <?=$productId[0][1] ?? ''?></h2>
         <h2 class="subtitle">Цена: <?=$productId[0][2] ?? ''?></h2>

         <h2 class="subtitle">Описание:</h2>
         <p class="text"><?=$productId[0][3] ?? ''?></p>

         <h2 class="subtitle">Коментарии:</h2>

         <ul class="list">
             <?php foreach ($coments as $key => $value): ?>
                 <li class="list__item"><?=$value[2]?></li>
             <?php endforeach; ?>
         </ul>

        <form class="form" method="post">
            <input type="hidden" name="id" value="<?=$_GET['show_id'] ?? NULL?>">

            <label class="form__label">Написать коментарий:
                <textarea class="form__textarea" name="description"></textarea>
            </label>

            <button class="form__btn" name="coment">Отправить</button>
        </form>
    </div>
  </body>
</html>
