<?php

// Для запуска
// /Applications/XAMPP/bin/php php/sandbox.php

// public: к свойствам и методам, объявленным с данным модификатором, можно обращаться из внешнего кода и из любой части программы

// protected: свойства и методы с данным модификатором доступны из текущего класса, а также из классов-наследников

// private: свойства и методы с данным модификатором доступны только из текущего класса

require_once './php/classes/Translator.php';

use classes\translator as ct;

$translation = new ct\Translator();
$translationDe = new ct\Translator('de');

var_dump( $translation->getDictionary() );


$translationResult = $translation->translate('work');
$translationResultDe = $translationDe->translate('arbit');

if ($translationResult) {
    echo $translationResult . PHP_EOL;
} else {
    echo 'Нет перевода' . PHP_EOL;
}

if ($translationResultDe) {
    echo $translationResultDe . PHP_EOL;
} else {
    echo 'Нет перевода' . PHP_EOL;
}


$testField_1 = 'test';

function test($testField_1)
{
    echo $testField_1;
}

/**
 *
 */
class TestClass
{
    private $testField_1, $testField_2;

    public function sretValues()
    {
        $this->testField_1 = 'test_1';
        $this->testField_2 = 'test_2';
    }

    public function showFields()
    {
        echo $this->testField_1 . PHP_EOL;
        echo $this->testField_2 . PHP_EOL;
    }
}


$testObject = new TestClass;

$testObject->sretValues();
$testObject->showFields();

test($testField_1);
