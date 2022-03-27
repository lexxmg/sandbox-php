<?php

require $_SERVER['DOCUMENT_ROOT'] . '/php/function.php';
require $_SERVER['DOCUMENT_ROOT'] . '/php/sql-function.php';

if( isset($_POST['button']) ) {
    $netId = $_POST['net'];
}

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'tel_number';

$connect = mysqli_connect($host, $user, $password, $dbname);
//UPDATE `ip_mask` SET `hosts` = 254 WHERE `ip_mask`.`bitmask` = 24;

if (mysqli_connect_error()) {
    die(mysqli_connect_error());
}

/**
* Вывод всех адресов
*/
if ("$uri[1]/$uri[2]" === 'api/ip') {
    $netId = 0;

    if ( !empty($uri[3]) ) {
        $netId = $uri[3];
    }

    echo json_encode(getIp($connect, $netId), JSON_UNESCAPED_UNICODE);
}

/**
* Вывод подсетей
*/
if ("$uri[1]/$uri[2]" === 'api/net') {
    echo json_encode(getNet($connect), JSON_UNESCAPED_UNICODE);
}

$resultIpMask = getMask($connect);

mysqli_close($connect);

function addIp(string $net = '1.1.1', int $start = 1, int $end = 2, string $mask, int $gateway): array
{
    $result = [];
    $count = $end - $start;

    for ($i = 0; $i <= $count; $i++) {
        $address = $start + $i;
        $ip = $net . '.' . $address;
        $arr = explode('.', $ip);

        $result[] = [
            'net' => $net,
            'address' => $address,
            'mask' => $mask,
            'gateway' => $gateway,
            'sort' => (int) "$arr[0]$arr[1]$arr[2]$arr[3]"
        ];
    }

    return $result;
}
//var_dump(addIp('185.35.160', 2, 10, '255.255.255.0', 65));
