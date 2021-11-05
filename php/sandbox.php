
<?php

session_start();

// var_dump( $_COOKIE );
$name = '';

if ( !isset($_COOKIE['PHPSESSID']) ) {
    setcookie('PHPSESSID', 'lexx_2', time() + 3600);
    $_SESSION['name'] = 'lexx';
} else {
    $name = 'Славься ' . $_SESSION['name'];
}

//phpinfo();
$counter = 1;

//$_SESSION['counter'] = 1; // установить знвчение в session
//unset($_SESSION['test-session']); // удалить значение session

var_dump($_SESSION);

if ( isset($_SESSION['count']) ) {
    //$_SESSION['count'] = $_SESSION['count'] + 1;
    $counter = $_SESSION['count']++;
} else {
    $_SESSION['count'] = $counter;
}

//unset($_SESSION['count']);
