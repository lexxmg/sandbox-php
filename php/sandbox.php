<?php

$stock = [];
$products = [];

$user = 'root';
$password = '';
$dsn = 'mysql:host=localhost;dbname=mydb';

// Устанавливаем подключение к серверу баз данных
$pdo = new PDO($dsn, $user, $password);

//$stmt = $pdo->prepare('INSERT INTO stock (name) VALUES (:name)');
$stmt = $pdo->query('SELECT * FROM stock');

// выполняем запрос
//$stmt->execute([':name' => 'Склад 1']);

while($row = $stmt->fetch()) {
    $stock[] = [
        'id' => $row['id'],
        'name' => $row['name']
    ];
}

// звкрываем соеденение
$pdo = null;
