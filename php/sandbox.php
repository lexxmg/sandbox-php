
<?php

session_start();

//var_dump( $_COOKIE );
$name = '';
$counter = 1;

if ( !isset($_SESSION['name']) ) {
    //setcookie('PHPSESSID', 'lexx_2', time() + 3600);
    $_SESSION['name'] = 'lexx';
} else {
    $name = 'Славься ' . $_SESSION['name'];
}

//phpinfo();


//$_SESSION['counter'] = 1; // установить знвчение в session
//unset($_SESSION['test-session']); // удалить значение session

//var_dump($_SESSION);

if ( isset($_SESSION['count']) ) {
    //$_SESSION['count'] = $_SESSION['count'] + 1;
    $counter = $_SESSION['count']++;
} else {
    $_SESSION['count'] = $counter;
}


// foreach ($_SESSION as $key => $value) {
//     unset($value);
// }
//
// foreach ($_COOKIE as $key => $value) {
//     //unset($value);
//     setcookie($value, '', 1);
// }
//
// var_dump( $_COOKIE );
//
// session_destroy(); // очистить session
//unset($_SESSION['count']);
