<?php

require ($_SERVER['DOCUMENT_ROOT'] . '/php/functions.php');

$data = [
    'short line',
    'what the fox say?',
    'very very very long line',
    'i dont know what to write here)',
    'QSOFT is great',
    'teacher is crazy',
    'qwertyqwertyqwertyqwerty',
    'здесь кирилица бла бла бла'
];

$result = [];

foreach ($data as $key => $value) {
    $result[] = cutString($value, 14);
}

//var_dump($result);
