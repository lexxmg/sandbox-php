<?php
  require( __DIR__ . '/php/sandbox.php' );
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>решение задачи</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/form.css">

    <link rel="stylesheet" href="lib/slick/slick-theme.css">
    <link rel="stylesheet" href="lib/slick/slick.css">

    <script src="lib/jQuery/jquery-3.5.1.min.js" defer></script>
    <script src="lib/slick/slick.min.js" defer></script>
    <script src="js/script.js" defer></script>
  </head>

  <body>
    <div class="fixed-container">
      <h1 class="title">Решите задачу</h1>

      <form class="form" action="<?= $_SERVER['PHP_SELF']?>" method="POST" name="myForm">
        <input type="hidden" class="form__input" value="<?= $sourceOperator1?>" name="op1">
        <input type="hidden" class="form__input" value="<?= $sourceSum?>" name="sum">

        <span class="form__text"><?= $sourceOperator1?> +</span>

        <input type="text" class="form__input" value="<?= $sourceOperator2?>" name="op2">

        <span class="form__text">= <?= $sourceSum?></span>

        <div class="form__inner form-inner">
          <? if ( isset($success) ): ?>
            <span class="form-inner__text form-inner__text--success"><?= "$op1 + $op2 = $sum  $success" ?></span>
          <? endif ?>

          <? if ( isset($error) ): ?>
            <span class="form-inner__text form-inner__text--err"><?= "$op1 + $op2 = $sum  $error" ?></span>
          <? endif ?>
        </div>

        <input class="form__btn" type="submit" value="Готово!" name="btn">
      </form>

      <p><?= '$_SERVER["DOCUMENT_ROOT"] = ' . $_SERVER['DOCUMENT_ROOT'];?></p>
      <p><?= $_SERVER['PHP_SELF']?></p>
      <p><?= __DIR__?></p>
      <p><? var_dump($_POST);?></p>
      <p><? var_dump( isset($success) ) ?></p>
    </div>
  </body>
</html>
