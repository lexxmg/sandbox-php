<?php

namespace php\classes\house;

/**
 * Класс здание
 */
class Building
{
    protected $floors, $matherial;

    protected function setFloorsNumber($floorsNumber)
    {
        if ($floorsNumber > 20) {
            echo 'Колличество этажей не может быть больше 20';
            return;
        }

        $this->floors = $floorsNumber;
    }
}


/**
 * Класс жилой дом наследуеться от здания
 */
class House extends Building
{
    private $heatingType, $address;

    public function __construct($floorsNumber, $matherial, $heatingType, $address)
    {
        $this->matherial = $matherial;
        $this->sddress = $address;
        $this->heatingType = $heatingType;

        $this->setFloorsNumber($floorsNumber);
    }

    public function showHouseDescription()
    {
        echo $this->matherial . PHP_EOL;
        echo $this->sddress . PHP_EOL;
        echo $this->heatingType . PHP_EOL;
        echo $this->floors . PHP_EOL;
    }
}
