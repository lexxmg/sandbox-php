<?php

//CREATE TABLE `test_db`.`staring` ( `str` VARCHAR(255) NOT NULL ) ENGINE = InnoDB;
//INSERT INTO `staring` (`str`) VALUES ('test')

namespace php\saveDB;

require_once $_SERVER['DOCUMENT_ROOT'] . '/php/Interface.php';
use php\inter as inter;

/**
 *
 */
class SaveDB implements inter\StringWriter
{
    public $connect, $host, $password, $dbname;

    function __construct()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->dbname = 'test_db';

        $this->connect = new \mysqli($this->host, $this->user, $this->password, $this->dbname) or die('connect BD err');
    }

    public function writeString($str)
    {
        $result = $this->connect->query(
            "UPDATE `staring` SET `staring`.`str` = '$str';"
        );

        if (!$result) {
            $this->connect->query(
                "CREATE TABLE `test_db`.`staring` ( `str` VARCHAR(255) NOT NULL ) ENGINE = InnoDB;"
            );

            $this->connect->query(
                "INSERT INTO `staring` (`str`) VALUES ('$str');"
            );
        }

        $this->connect->close();
    }

    public function stat()
    {
        var_dump( $this->connect->get_connection_stats() );
    }
}
