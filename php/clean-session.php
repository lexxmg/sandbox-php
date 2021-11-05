
<?php

session_start();

$name = '';
$counter = 1;

foreach ($_SESSION as $key => $value) {
    unset($value);
}

foreach ($_COOKIE as $key => $value) {
    //unset($value);
    echo $value . '<br>';
    setcookie($key, '', 1);
}

//var_dump( $_COOKIE );

session_destroy(); // очистить session
