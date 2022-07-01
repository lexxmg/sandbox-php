<?php

namespace employee;

/**
 *
 */
class Employee
{
    public $name, $position, $age;

    public function setParameters($name, $position, $age)
    {
        $this->name = $name;
        $this->position = $position;
        $this->age = $age;
    }

    public function showEmployeeInfo()
    {
        printf('Сотрудник %s, должность %s мой возраст %g лет',
            $this->name, $this->position, $this->age
        );
    }
}

/**
 *
 */
class Accountant extends Employee
{

    public function prepareReport()
    {
        echo 'Я готовлю отчет';
    }
}

/**
 *
 */
class CEO extends Employee
{

    public function fireEmployee($name)
    {
        echo 'Я уволил сотрудника ' . $name;
    }
}

/**
 *
 */
class Welder extends Employee
{

    public function makeWeld()
    {
        echo 'Я делаю сварку';
    }
}
