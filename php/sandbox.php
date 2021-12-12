<?php

$rowResult = [];
$resultProducts = [];

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'mydb';

$connect = mysqli_connect($host, $user, $password, $dbname);

if (mysqli_connect_error()) {
    die(mysqli_connect_error());
} else {
    echo 'Успешное подключение к базе';

    // $result = mysqli_query(
    //     $connect,
    //     "INSERT INTO `stock` (`name`)
    //     VALUES ('большой склад')");

    if (false) {
        $result = mysqli_query(
            $connect,
            "INSERT INTO `stock` (`name`)
            VALUES ('малый склад'), ('средний склад')"
        );
    }

    if (false) {
        $products = mysqli_query(
            $connect,
            "INSERT INTO `products` SET
            name='Стол', count='3', price='4000',
            stock_id='3'"
        );
    }

    $result = mysqli_query(
        $connect,
        "SELECT * FROM `stock`"
    );

    $products = mysqli_query($connect, "SELECT * FROM `products`");

    //var_export($result);

    while ($row = mysqli_fetch_assoc($result)) {
        //var_dump($row);
        $rowResult[] = $row;
    }

    while ($row = mysqli_fetch_assoc($products)) {
        $resultProducts[] = $row;
    }

    //var_dump(mysqli_fetch_assoc($result));
}

mysqli_close($connect);
