
<?php

var_dump( isset($_POST['upload']) );
var_dump( empty($_FILES['myFile']['error']) );


if ( isset($_POST['upload']) ) {
    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/upload';

    foreach ($_FILES['myFile']['error'] as $key => $value) {
        if ( $value === UPLOAD_ERR_OK ) {
            $tmp_name = $_FILES['myFile']['tmp_name'][$key];
            // basename() может предотвратить атаку на файловую систему;
            // может быть целесообразным дополнительно проверить имя файла
            $name = basename($_FILES['myFile']['name'][$key]);
            move_uploaded_file($tmp_name, "$uploadPath/$name" );
        } else {
            echo 'Произошла ошибка';
        }
        //move_uploaded_file($_FILES['myFile']['tmp_name'], $uploadPath . $_FILES['myFile']['name']);
        //unlink($uploadPath . $_FILES['myFile']['name']);
    }
    echo count($_FILES['myFile']['name']);
}


var_dump( scandir($_SERVER['DOCUMENT_ROOT'] . '/upload') );
