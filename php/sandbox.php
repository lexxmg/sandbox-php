<?php

// Для запуска
// /Applications/XAMPP/bin/php php/sandbox.php


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
$employee_1_1->displayAge();
$employee_1_1->all();
$employee_1_1->changePosition('NEW');
$employee_1_1->all();


$employee_1 = [
    'age' => 18,
    'gende' => 'gerl',
    'name' => 'Alisiay',
    'surname' => 'africa',
    'position' => 'CEO'
];

$employee_2 = [
    'age' => 38,
    'gende' => 'male',
    'name' => 'Vasya',
    'surname' => 'Ivanov',
    'position' => 'CTO'
];

function displayName($employee)
{
    echo $employee['name'];
}

function displayAge($employee)
{
    echo $employee['age'];
}

function changePosition(&$employee, $position)
{
    $employee['position'] = $position;
}
