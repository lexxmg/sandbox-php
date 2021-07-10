<?php

$result = [];

if ( isset($_POST['send']) ) {
    $result = [$_POST['number1'], $_POST['number2'], $_POST['number3']];

    if (empty($POST['sort']) ) {
        if ($_POST['sort'] == 'desc') {
            rsort($result);
        } else {
            sort($result);
        }
    }
}
