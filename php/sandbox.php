<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'my_test_sql';

$connect = mysqli_connect($host, $user, $password, $dbname);

if (!$connect) {
    die('Error connect to database!');
} else {
    //echo mysqli_get_host_info($connect);
}

$products = mysqli_query($connect, "SELECT * FROM `products`");
$products = mysqli_fetch_all($products);

//var_dump($products);

$product = htmlspecialchars($_POST['product'] ?? NULL);
$price = htmlspecialchars($_POST['price'] ?? NULL);
$description = htmlspecialchars($_POST['description'] ?? NULL);

if ( isset($_POST['create']) ) {
    print_r($_POST);
    mysqli_query($connect, "INSERT INTO `products` (`id`, `title`, `price`, `description`) VALUES (NULL, '$product', '$price', '$description')");
    header('Location: /');
    exit();
}

if ( isset($_GET['edit_id']) ) {
    $id = $_GET['edit_id'];

    $productId = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = $id");
    $productId = mysqli_fetch_all($productId);
    //$productId = mysqli_fetch_assoc($productId);
    //var_dump($productId[0][3]);
    //echo $productId[3];
}

if ( isset($_POST['edit']) && isset($_GET['edit_id']) ) {
    $id = $_GET['edit_id'];

    mysqli_query($connect, "UPDATE `products` SET `title` = '$product', `price` = '$price', `description` = '$description' WHERE `products`.`id` = $id");
    //mysqli_query($connect, "INSERT INTO `products` (`id`, `title`, `price`, `description`) VALUES ('$id', '$product', '$price', '$description')");
    header('Location: /');
    exit();
}

if ( isset($_GET['delete_id']) ) {
    $id = $_GET['delete_id'];
    mysqli_query($connect, "DELETE FROM `products` WHERE `products`.`id` = $id");
    header('Location: /');
    exit();
}
