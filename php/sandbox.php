<?php

// Для запуска
// /Applications/XAMPP/bin/php php/sandbox.php

// public: к свойствам и методам, объявленным с данным модификатором, можно обращаться из внешнего кода и из любой части программы

// protected: свойства и методы с данным модификатором доступны из текущего класса, а также из классов-наследников

// private: свойства и методы с данным модификатором доступны только из текущего класса

require_once $_SERVER['DOCUMENT_ROOT'] . '/php/Interface.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/SaveDB.php';

use php\inter as inter;
use php\saveDB as DB;

$path = $_SERVER['DOCUMENT_ROOT'] . '/uplode/example.txt';
$path2 = $_SERVER['DOCUMENT_ROOT'] . '/uplode/example_2.txt';

$fileWriterStor = new inter\FileWriterStor($path);

$fileWriter = new inter\FileWriterStor($path2);

$scrssnWriter = new inter\ScreenWriter();

$db = new DB\SaveDB();
//$db->writeString('test_db');
//$db->stat();

//$stringProcessor = new inter\StringProcessor(new inter\ScreenWriter(), 'test');
$stringProcessor = new inter\StringProcessor($scrssnWriter);
$stringProcessor2 = new inter\StringProcessor($fileWriterStor);
$stringProcessor3 = new inter\StringProcessor($fileWriter);
$stringProcessor4 = new inter\StringProcessor($db);

$stringProcessor->write('test');
$stringProcessor2->write('test');
$stringProcessor3->write('test-2');
$stringProcessor4->write('test-4-db');
