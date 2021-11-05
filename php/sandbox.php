
<?php

/**
    Приложение которое считает колличество просмотров страниы
*/

//setcookie('test-cookie', 'test', time() + 3600);  /* срок действия 1 час */
//setcookie('test-cookie', 'test', 1);  /* удалить cookie */

$cookie = '';
//$count = 1;

// if ( !isset($_COOKIE['test-cookie']) ) {
//     setcookie('test-cookie', 'test', time() + 3600);
//     $cookie = $_COOKIE['test-cookie'];
// }

//var_dump(isset($_COOKIE['count']));

if ( !isset($_COOKIE['count']) ) {
    setcookie('count', $count, time() + (60 * 60 * 24) ); // срок действия сутки
} else {
    $count = $_COOKIE['count'] + 1;
    setcookie('count', $count, time() + (60 * 60 * 24) );
}

//setcookie('count', 0, 1); // удалить cookie
