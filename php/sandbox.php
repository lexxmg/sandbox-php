<?php

// Для запуска
// /Applications/XAMPP/bin/php php/sandbox.php

// public: к свойствам и методам, объявленным с данным модификатором, можно обращаться из внешнего кода и из любой части программы

// protected: свойства и методы с данным модификатором доступны из текущего класса, а также из классов-наследников

// private: свойства и методы с данным модификатором доступны только из текущего класса

require_once $_SERVER['DOCUMENT_ROOT'] . '/php/classes/House.php';

use php\classes\house as house;

$cityHouseObj = new house\House(16, 'Бетон', 'Центральное', 'Лавочкина 20');
