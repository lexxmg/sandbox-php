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

//var_dump( array_column($menu, 'sort') );
//array_multisort(array_column($menu, 'sort'), SORT_ASC, $menu);
//var_dump($menu);

//var_dump( arraySort($menu, 'sort', SORT_ASC) );
//var_dump( arraySort($menu, 'sort', SORT_DESC) );
/**
 * Должен получиться следующий порядок:
 * - Главная страница
 * - О Skillbox
 * - О QSOFT
 * - О нас
 * - О погоде
 */
