<?php

namespace php\classAbstract;

abstract class Vehicle
{
    abstract function move();
}

/**
 *
 */
class Car extends Vehicle
{
    public function move()
    {
        echo 'Завести мотор' . PHP_EOL . 'начать движение';
    }
}

/**
 *
 */
class Bicycle extends Vehicle
{
    public function move()
    {
        echo 'крутить педали';
    }
}
