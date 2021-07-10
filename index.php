<?php
  require ('php/sandbox.php');
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>POST & GET</title>

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
      <h1 class="title">POSR & GET</h1>

      <p class="par">Массив GET</p>

      <pre>
        <?php var_dump($_GET)?>
      </pre>

      <p class="par">Массив POST</p>

      <pre>
        <?php var_dump($_POST)?>
      </pre>

      <p><?=$_SERVER['DOCUMENT_ROOT']?></p>

      <form action="$_SERVER('DOCUMENT_ROOT')" class="form" method="post" name="myForm">
        <div class="form__input-wrapper form-input-wrapper">
          <input class="form-input-wrapper__input" id="number1" type="text" name="number1">
          <label for="number1" class="form-input-wrapper__label">Введите число</label>
        </div>

        <div class="form__input-wrapper form-input-wrapper">
          <input class="form-input-wrapper__input" id="number2" type="text" name="number2">
          <label for="number2" class="form-input-wrapper__label">Введите число</label>
        </div>

        <div class="form__input-wrapper form-input-wrapper">
          <input class="form-input-wrapper__input" id="number3" type="text" name="number3">
          <label for="number3" class="form-input-wrapper__label">Введите число</label>
        </div>

        <select class="form__select" name="myFormSelect">
          <option selected value="">Не сортировать</option>
          <option value="desc">По убыванию</option>
          <option value="asc">По возрастанию</option>
        </select>

        <button class="form__btn" name="myFormSubmit" value="send">Вычислить</button>
      </form>
    </div>
  </body>
</html>
