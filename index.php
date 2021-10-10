<?php
  require ('php/sandbox.php');
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
      <pre>
        <?php var_dump($_FILES) ?>
      </pre>

      <h1 class="title">Загрузка файлов</h1>

      <form class="form" action="" method="POST" type="file" enctype="multipart/form-data">
        <div class="form__input-container form-input-container">
          <input class="form-input-container__input" id="myFile" type="file" name="myFile[]" multiple>
          <label for="myFile" class="form-input-container__label">Загрузить файл</label>
        </div>

        <button class="form__btn" name="upload">Загрузить</button>
      </form>
    </div>
  </body>
</html>
