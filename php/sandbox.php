
<?php

session_start();

// var_dump( $_COOKIE );

//phpinfo();

$_SESSION['test-session'] = 1; // установить знвчение в session
//unset($_SESSION['test-session']); // удалить значение session

if ( isset($_SESSION['test-session']) ) {
    var_dump($_SESSION['test-session']);
}
