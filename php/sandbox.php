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

    // добавить в базу
    if (false) {
        $result = mysqli_query(
            $connect,
            "INSERT INTO `stock` (`name`)
            VALUES ('малый склад'), ('средний склад')"
        );
    }

    // добавить в базу несколько значений
    if (false) {
        $products = mysqli_query(
            $connect,
            "INSERT INTO `products` (`name`, `price`, `count`, `stock_id`)
            VALUES
            ('лампа', '1000', '13', '3'),
            ('холодильник', '100000', '5', '3'),
            ('ручка', '15', '150', '2')"
        );
    }

    // добавить в базу, альтернативный синтаксис
    if (false) {
        $products = mysqli_query(
            $connect,
            "INSERT INTO `products` SET
            name='Стол', count='3', price='4000',
            stock_id='3'"
        );
    }

    // изменить значение
    if (0) {
        $products = mysqli_query(
            $connect,
            "UPDATE `products` SET `price` = `price` + '12' WHERE `products`.`id` = 2"
        );
    }

    // изменить значение
    if (0) {
        $products = mysqli_query(
            $connect,
            "UPDATE `products` SET `price` = '50450' WHERE `products`.`id` = 2"
        );
    }

    // изменить значение по щесортированному столбцу price, первые 2 значения
    // asc-сортировка по возрастанию
    // desc-сортировка по убыванию
    if (0) {
        $products = mysqli_query(
            $connect,
            "UPDATE `products` SET `price` = `price` + 14 ORDER BY `price` desc limit 2"
        );
    }


    $result = mysqli_query($connect, "SELECT * FROM `stock`");

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
