<?php

/**
* Разбивка IP на сеть и адрес
* 192.168.0.55 будет ['net']['192.168.0'] ['address'][55] ['sort'][1921680]
* splitIp('192.168.0.55');
*/
function splitIp(string $ip = '0.0.0.0'): array
{
    $arr = explode('.', $ip);
    $net = "$arr[0].$arr[1].$arr[2]";
    $address = (int) $arr[3];
    $sort = (int) "$arr[0]$arr[1]$arr[2]$arr[3]";

    $result = [
        'net' => $net,
        'address' => $address,
        'sort' => $sort
    ];

    return $result;
}
//var_dump( splitIp('185.35.161.65') );

/**
* Объеденение суеи и адреса
* '192.168.0' и 55 будет 192.168.0.55
* joinIp('192.168.0', 55);
*/
function joinIp(string $net = '0.0.0', int $addres = 0): string
{
    return $net . '.' . $addres;

}
//echo joinIp('185.35.161', 65);
