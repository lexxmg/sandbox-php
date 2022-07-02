<?php

namespace php\classTrait;

require_once 'Abstract.php';

use  \php\classAbstract as ab;

/**
 *
 */
trait VehicleFunctions
{
    public function ride()
    {
        echo 'Ямогу ехать';
    }

    public function fly()
    {
        echo 'Я могу летать';
    }

    public function move()
    {
        echo 'Завести мотор trait';
    }
}


/**
 *
 */
class Car extends ab\Car
{
    use VehicleFunctions;
}

/**
 *
 */
class Plane
{
    use VehicleFunctions;
}

/**
 *
 */
class FantomasCar
{
    use VehicleFunctions;

    public function escape()
    {
        $this->ride();
        $this->fly();

        echo 'Я скрылся';
    }
}
