<?php

$result = [];
$sort = 'не отсортированы';

$number1 = '';
$number2 = '';
$number3 = '';


if ( isset($_POST['send']) ) {
    //$result = [$_POST['number1'], $_POST['number2'], $_POST['number3']];
    $result = $_POST['number'];

    $number1 = $_POST['number'][0];
    $number2 = $_POST['number'][1];
    $number3 = $_POST['number'][2];

    if ( !empty($_POST['sort']) ) {
        if ($_POST['sort'] == 'desc') {
            rsort($result);
            $sort = 'отсортированы по убыванию';
        } else {
            sort($result);
            $sort = 'отсортированы по возрастанию';
        }
    }
}
