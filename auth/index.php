
<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/php/sandbox.php');
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>sandbox php</title>

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/master.css">

    <link rel="stylesheet" href="/lib/slick/slick-theme.css">
    <link rel="stylesheet" href="/lib/slick/slick.css">

    <script src="/lib/jQuery/jquery-3.5.1.min.js" defer></script>
    <script src="/lib/slick/slick.min.js" defer></script>
    <script src="/js/script.js" defer></script>
  </head>

  <body>
    <div class="fixed-container">
        <h1 class="title">Авторизоваться</h1>

        <form class="form" method="post">
            <label class="form__label">Имя:
                <input class="form__input" type="text" name="name" value="<?=$name?>">
            </label>

            <label class="form__label">Пароль:
                <input class="form__input" type="password" name="password" value="<?=$password?>">
            </label>

            <?php if ( !empty($error) ): ?>
                <span class="form__error"><?=$error?></span>
            <?php endif; ?>

            <button class="form__submit btn" name="submit">Войти</button>
        </form>
    </div>
  </body>
</html>
