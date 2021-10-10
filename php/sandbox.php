
<?php

var_dump(isset($_POST['upload']));
var_dump( empty($_FILES['myFile']['error']) );


if ( isset($_POST['upload']) ) {
    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
    
    foreach ($_FILES['myFile']['name'] as $key => $value) {
        if ( !empty($_FILES['myFile']['error'][$key]) ) {
            echo 'Произошла ошибка';
        } else {
            echo count($_FILES);

            move_uploaded_file($_FILES['myFile']['tmp_name'][$key], $uploadPath . $_FILES['myFile']['name'][$key]);
        }
        //move_uploaded_file($_FILES['myFile']['tmp_name'], $uploadPath . $_FILES['myFile']['name']);
        //unlink($uploadPath . $_FILES['myFile']['name']);
    }
}
