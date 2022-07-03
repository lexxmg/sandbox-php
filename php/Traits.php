<?php

namespace php\classTrait;

require_once 'Abstract.php';

use  \php\classAbstract as ab;

/**
 *
 */
trait Car
{
    public function ride()
    {
        echo 'Ямогу ехать';
    }
}

/**
 *
 */
trait Plane
{
    public function fly()
    {
        echo 'Я могу летать';
    }
}



/**
 *
 */
trait VehicleFunctions
{
    use Car;
    use Plane;

    public function move()
    {
        echo 'Завести мотор trait';
    }
}


/**
 *
 */
class Car2 extends ab\Car
{
    use Car;
}

/**
 *
 */
class Plane2
{
    use Plane;
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
