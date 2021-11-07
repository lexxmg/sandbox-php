
<?php

/**
* $var = $value ?? "Другое значение";
*
* // еквивалентно
* $var = isset($value) ? $value : "Другое значение";
*/
session_cache_expire(30);
session_start();

$arrName = ['user', 'user2', 'user3'];
$arrPassword = ['123', '1234', '12345'];

$name = htmlspecialchars($_POST['name'] ?? '');
$password = htmlspecialchars($_POST['password'] ?? '');

if ( isset($_SESSION['name']) ) {
    $success = true;
    $error = '';
    $authUser = $_SESSION['name'];

    if ( parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === '/auth/' ) {
        header('Location: http://sandbox.my');
        exit();
    }
} else {
    $success = false;
    $error = '';
    $authUser = '';

    if ( parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) !== '/auth/' ) {
        header('Location: http://sandbox.my/auth');
        exit();
    }
}

//var_dump($_POST);

if ( isset($_POST['submit']) ) {
    if ( $name === '' && $password === '' ) {
        $error = 'Имя и пароль, должны быть заполнены!';
    } else {
        $error = 'логин или пароль не верны!';

        foreach ($arrName as $key => $value) {
            if ($name === $value && $password === $arrPassword[$key]) {
                $success = true;
                $error = '';
                $authUser = $value;
                $_SESSION['name'] = $value;

                header('Location: http://sandbox.my/auth');
                exit();
            }
        }
    }
}

if ( isset($_POST['logout']) ) {
    $success = false;
    $error = '';
    $authUser = '';

    unset($_SESSION['name']);

    session_destroy();

    foreach($_SESSION as $key => $item) {
        unset($item);
    }

    foreach ($_COOKIE as $key => $value) {
        setcookie($key, '', 1);
    }


    //var_dump($_SESSION);
    //var_dump($_COOKIE);

    header('Location: http://sandbox.my/auth');
    exit();
}
