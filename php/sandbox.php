<?php

$income = 60000;

if ( isset($_POST['submit']) ) {
    $income = empty(!$_POST['income']) ? $_POST['income'] : 0;
}

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'calc';

$connect = mysqli_connect($host, $user, $password, $dbname);

if (mysqli_connect_error()) {
    die(mysqli_connect_error());
}

$result = mysqli_query(
    $connect,
    "SELECT * FROM `percentage_of_freedom`;"
);

//var_dump( mysqli_fetch_all($result) );

mysqli_close($connect);
