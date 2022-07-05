<?php

// Для запуска
// /Applications/XAMPP/bin/php php/sandbox.php

// public: к свойствам и методам, объявленным с данным модификатором, можно обращаться из внешнего кода и из любой части программы

// protected: свойства и методы с данным модификатором доступны из текущего класса, а также из классов-наследников

// private: свойства и методы с данным модификатором доступны только из текущего класса

require_once $_SERVER['DOCUMENT_ROOT'] . '/php/Interface.php';

use php\inter as inter;

$path = $_SERVER['DOCUMENT_ROOT'] . '/example.txt';

$fileWriter = new inter\FileWriter($path);
$scrssnWriter = new inter\ScreenWriter();

//$stringProcessor = new inter\StringProcessor(new inter\ScreenWriter(), 'test');
$stringProcessor = new inter\StringProcessor($scrssnWriter);
$stringProcessor2 = new inter\StringProcessor($fileWriter);

$stringProcessor->write('test');
$stringProcessor2->write('test');
