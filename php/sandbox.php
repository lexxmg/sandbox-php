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
            ('лампа', '1000', '13', '1'),
            ('холодильник', '100000', '5', '3'),
            ('стул', '15', '70', '2')"
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

    // изменить значение по отсортированному столбцу price, первые 2 значения
    // asc-сортировка по возрастанию
    // desc-сортировка по убыванию
    if (0) {
        $products = mysqli_query(
            $connect,
            "UPDATE `products` SET `price` = `price` + 14 ORDER BY `price` desc limit 2"
        );
    }

    // удаление
    if (0) {
        $products = mysqli_query(
            $connect,
            "DELETE FROM `products` WHERE `id` = 3"
        );
    }

    if (0) {
        $products = mysqli_query(
            $connect,
            "DELETE FROM `products` ORDER BY `price` asc LIMIT 3"
        );
    }


    $result = mysqli_query($connect, "SELECT * FROM `stock`");

    // Вывод всех стольбцов
    if (0) {
        $products = mysqli_query($connect, "SELECT * FROM `products`");
    }

    // Вывод первыз 3 отсортированных по возрастанию
    //$products = mysqli_query($connect, "SELECT * FROM `products` ORDER BY `price` ASC LIMIT 3");

    // Вывод одного столбца и переименование вывода
    //$products = mysqli_query($connect, "SELECT `name` AS 'назание' FROM `products`");

    // Вывод определенных столбцов и переиминование вывода
    // $products = mysqli_query(
    //     $connect,
    //     "SELECT `name` AS 'назание', `price` AS 'цена' FROM `products`"
    // );

    // Исклюючить дубликаты названий в выводе ( DISTINCT )
    if (0) {
        $products = mysqli_query(
            $connect,
            "SELECT DISTINCT `name` FROM `products` ORDER BY `name` ASC"
        );
    }

    /**
    * Фильтрация данных
    * вывести товар где цена равнв 15
    * = Равно
    * <> или  !=  Не равно
    * >= Больше или равно
    * <= Меньше или равно
    *
    * IS Соответствует указанному
    * IS NOT Не соответствует указанному
    *
    * BETWEEN AND Промежуто от и до включительно (BETWEEN 15 AND 700)
    *
    * IN() Список IN(1000, 15, 700)
    *
    * LIKE Регулярное вырожение (наченаеться на 'ст%')
    *
    * AND (И  &&) true AND false = false
    * OR  (ИЛИ ||) true OR false = true, true OR true = true
    * XOR (исключающие ИЛИ) true XOR false = true, true XOR true = false
    * NOT (отрицание или NULL)
    */
    if (0) {
        $products = mysqli_query(
            $connect,
            "SELECT `name` FROM `products` WHERE `products`.`price` >= 15");
    }

    if (0) {
        $products = mysqli_query(
            $connect,
            "SELECT `name`, `description` FROM `products` WHERE `description` IS null");
    }

    if (0) {
        $products = mysqli_query(
            $connect,
            "SELECT `name`, `price` FROM
                `products` WHERE
                `products`.`price` BETWEEN 15 AND 700
            "
        );
    }

    if (0) {
        $products = mysqli_query(
            $connect,
            "SELECT `name`, `price` FROM
                `products` WHERE
                `products`.`price` IN(1000, 15, 700)
            "
        );
    }

    if (0) {
        $products = mysqli_query(
            $connect,
            "SELECT `name`, `price` FROM
                `products` WHERE
                `products`.`name` LIKE 'ст%'
            "
        );
    }

    if (0) {
        $products = mysqli_query(
            $connect,
            "SELECT `name`, `price` FROM
                `products` WHERE
                `products`.`name` LIKE '%т%' AND `products`.`price` >= 1700
            "
        );
    }

    if (0) {
        $products = mysqli_query(
            $connect,
            "SELECT `name`, `price`, `count` FROM
                `products` WHERE
                `products`.`count` > 10 XOR `products`.`price` >= 1700
            "
        );
    }

    if (0) {
        $products = mysqli_query(
            $connect,
            "SELECT `name`, `price`, `count` FROM
                `products` WHERE
                 NOT `products`.`price` = 1700
            "
        );
    }

    /**
    * GROUP BY (группирует по имени столбца)
    * sum(`count`) (сумирует значения `count`)
    */
    if (1) {
        $products = mysqli_query(
            $connect,
            "SELECT `name`, sum(`count`) FROM `products` GROUP BY `name`
            "
        );
    }

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
