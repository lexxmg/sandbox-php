<?php

// Для запуска
// /Applications/XAMPP/bin/php php/sandbox.php

// public: к свойствам и методам, объявленным с данным модификатором, можно обращаться из внешнего кода и из любой части программы

// protected: свойства и методы с данным модификатором доступны из текущего класса, а также из классов-наследников

// private: свойства и методы с данным модификатором доступны только из текущего класса

require_once $_SERVER['DOCUMENT_ROOT'] . '/php/Employee.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/Abstract.php';
require_once 'Class_B.php';

use php\classAbstract as ca;

$car = new ca\Car();
$bicycle = new ca\Bicycle();



$accountant = new employee\Accountant();
$accountant->setParameters('Иван', 'Глав. бух.', 36);


$bObject = new b\Class_B();

$cObject = new b\Class_C();

echo $bObject->showMessage() . PHP_EOL;

echo $cObject->showMessage() . PHP_EOL;

$cObject->setMessage('новое сообщение');
echo $cObject->showMessage() . PHP_EOL;

echo $bObject->showMessage() . PHP_EOL;
