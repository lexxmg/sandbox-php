
<?php

var_dump(isset($_POST['upload']));
var_dump( empty($_FILES['myFile']['error']) );

if ( isset($_POST['upload']) ) {
    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/upload/';

    if ( !empty($_FILES['myFile']['error']) ) {
        echo 'Произошла ошибка';
    } else {
        move_uploaded_file($_FILES['myFile']['tmp_name'], $uploadPath . $_FILES['myFile']['name']);
    }
}
