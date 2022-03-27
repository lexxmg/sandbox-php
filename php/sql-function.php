<?php

/**
* Получение всех IP адресов
* getIp($connect)
*
* Получение выбраной подсети
* getIp($connect, 1)
*/
function getIp(object $connect, int $netId = 0): array
{
    $result = [];

    if ($netId) {
        $ip = mysqli_query(
            $connect,
            "SELECT `ip`.`id`, `ip_net`.`net`,
            `ip`.`address`, `ip_mask`.`netmask`,
            `ip`.`gateway`, `users`.`name` AS 'user_name' FROM `ip`
            LEFT JOIN `ip_net` ON `ip_net`.`id` = `ip`.`ip_net_id`
            LEFT JOIN `ip_mask` ON `ip_mask`.`id` = `ip`.`ip_mask_id`
            LEFT JOIN `users` ON `users`.`id` = `ip`.`users_id`
            WHERE `ip`.`ip_net_id` = $netId
            ORDER BY `ip_net`.`net`, `ip`.`address` ASC;"
        );
    } else {
        $ip = mysqli_query(
            $connect,
            "SELECT `ip`.`id`, `ip_net`.`net`,
            `ip`.`address`, `ip_mask`.`netmask`,
            `ip`.`gateway`, `users`.`name` AS 'user_name' FROM `ip`
            LEFT JOIN `ip_net` ON `ip_net`.`id` = `ip`.`ip_net_id`
            LEFT JOIN `ip_mask` ON `ip_mask`.`id` = `ip`.`ip_mask_id`
            LEFT JOIN `users` ON `users`.`id` = `ip`.`users_id`
            ORDER BY `ip_net`.`net`, `ip`.`address` ASC;"
        );
    }

    while ( $row = mysqli_fetch_assoc($ip) ) {
        $result[] = [
            'id' => $row['id'],
            'ip' => joinIp($row['net'], $row['address']),
            'netmask' => $row['netmask'],
            'gateway' => joinIp($row['net'], $row['gateway']),
            'user' => $row['user_name']
        ];
    }

    return $result;
}

/**
* Получение адресов подсети
* getNet($connect)
*/
function getNet(object $connect): array
{
    $result = [];

    $ipNet = mysqli_query($connect, "SELECT * FROM `ip_net` ORDER BY `net` ASC;");

    while ( $row = mysqli_fetch_assoc($ipNet) ) {
        $result[] = $row;
    }

    return $result;
}

/**
* Получение маски подсети
* getMask($connect)
*/
function getMask(object $connect): array
{
    $result = [];

    $ipMask = mysqli_query($connect, "SELECT * FROM `ip_mask`;");

    while ( $row = mysqli_fetch_assoc($ipMask) ) {
        $result[] = $row;
    }

    return $result;
}
