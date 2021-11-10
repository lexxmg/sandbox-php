<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'my_test';

$connect = mysqli_connect($host, $user, $password, $dbname);

echo mysqli_get_host_info($connect);
