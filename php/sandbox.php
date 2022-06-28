<?php

// Для запуска
// /Applications/XAMPP/bin/php php/sandbox.php

// public: к свойствам и методам, объявленным с данным модификатором, можно обращаться из внешнего кода и из любой части программы

// protected: свойства и методы с данным модификатором доступны из текущего класса, а также из классов-наследников

// private: свойства и методы с данным модификатором доступны только из текущего класса


/**
 *
 */
class Student
{
    public static $department = 'Иностранных языков';
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function showDepartment()
    {
        return self::$department;
    }

    public function changeDepartment($department)
    {
        self::$department = $department;
    }

    public static function changeDepartmentStatic($department)
    {
        self::$department = $department;
    }
}

$studentOne = new Student('Vasya');
$studentTwo = new Student('Petya');

//$studentOne->changeDepartment('новое название');

Student::changeDepartmentStatic('новое название static');

echo $studentOne->name . PHP_EOL;
echo $studentOne->showDepartment() . PHP_EOL;

echo $studentTwo->name . PHP_EOL;
echo $studentTwo->showDepartment() . PHP_EOL;
