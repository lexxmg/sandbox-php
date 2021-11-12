<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'my_test_sql';

$connect = mysqli_connect($host, $user, $password, $dbname);

if (!$connect) {
    die('Error connect to database!');
} else {
    echo mysqli_get_host_info($connect);
}

$products = mysqli_query($connect, "SELECT * FROM `products`");
$products = mysqli_fetch_all($products);

//var_dump($products);
