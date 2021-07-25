<?php

require ($_SERVER['DOCUMENT_ROOT'] . '/php/functions.php');

$menu = [
    [
        'name' => 'Главная страница',
        'sort' => 1,
        'path' => '/',
    ],
    [
        'name' => 'О нас',
        'sort' => 110,
        'path' => '/about',
    ],
    [
        'name' => 'О QSOFT',
        'sort' => 10,
        'path' => '/qsoft',
    ],
    [
        'name' => 'О Skillbox',
        'sort' => 9,
        'path' => '/skillbox',
    ],
    [
        'name' => 'О погоде',
        'sort' => 9200,
        'path' => '/weather',
    ],
];

var_dump( array_column($menu, 'sort') );
var_dump( array_multisort($menu, array_column($menu, 'sort'), SORT_ASC) );

//var_dump( arraySort($menu, 'sort', SORT_ASC) );
/**
 * Должен получиться следующий порядок:
 * - Главная страница
 * - О Skillbox
 * - О QSOFT
 * - О нас
 * - О погоде
 */
