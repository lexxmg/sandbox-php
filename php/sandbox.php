<?php

// Для запуска
// /Applications/XAMPP/bin/php php/sandbox.php

// public: к свойствам и методам, объявленным с данным модификатором, можно обращаться из внешнего кода и из любой части программы

// protected: свойства и методы с данным модификатором доступны из текущего класса, а также из классов-наследников

// private: свойства и методы с данным модификатором доступны только из текущего класса

/**
 * Здания
 */
class Building
{
    const MAX_FLOORS = 20;

    private $floors;

    public function setFloorsNumber($floorNumber)
    {
        echo 'Вызван метод ' . __METHOD__ . PHP_EOL;

        if ($floorNumber > self::MAX_FLOORS) {
            echo 'Слишком высокое!' . PHP_EOL;
            return;
        }

        $this->floors = $floorNumber;
    }

    public function showFloorNumber()
    {
        echo $this->floors . PHP_EOL;
    }

    public function showClossName()
    {
        echo 'Имя данного класса ' . __CLASS__ . PHP_EOL;
        self::static();
    }

    public static function static()
    {
        echo 'Статическая функция' . PHP_EOL;
    }
}

$building = new Building();
$building->setFloorsNumber(7);
$building->setFloorsNumber(21);
$building->showFloorNumber();
$building->showClossName();
echo Building::class . PHP_EOL;
Building::static();


/**
 *
 */
class Employee
{
    public $age, $gender, $name, $surname, $position;

    public function displayAge()
    {
        echo $this->age . PHP_EOL;
    }

    public function displayName()
    {
        echo $this->employee . PHP_EOL;
    }

    public function all()
    {
        echo $this->age . PHP_EOL;
        echo $this->gender . PHP_EOL;
        echo $this->name . PHP_EOL;
        echo $this->surname . PHP_EOL;
        echo $this->position . PHP_EOL;
    }

    public function changePosition($position)
    {
        $this->position = $position;
    }
}

$employee_1_1 = new Employee();
$employee_1_1->age = 18;
$employee_1_1->gender = 'gerl';
$employee_1_1->name = 'Alisiay';
$employee_1_1->surname = 'africa';
$employee_1_1->position = 'CEO';
// $employee_1_1->displayAge();
// $employee_1_1->all();
// $employee_1_1->changePosition('NEW');
// $employee_1_1->all();
