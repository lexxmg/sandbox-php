<?php

// Для запуска
// /Applications/XAMPP/bin/php php/sandbox.php

// public: к свойствам и методам, объявленным с данным модификатором, можно обращаться из внешнего кода и из любой части программы

// protected: свойства и методы с данным модификатором доступны из текущего класса, а также из классов-наследников

// private: свойства и методы с данным модификатором доступны только из текущего класса

require_once './php/classes/Translator.php';

use classes\translator as ct;

$translation = new ct\Translator('en', '/Applications/XAMPP/xamppfiles/htdocs/domains/sandbox.my/upload/storage.json');
$translationDe = new ct\Translator('de', '/Applications/XAMPP/xamppfiles/htdocs/domains/sandbox.my/upload/storage.json');


// $translation->addWord('лес', 'forest', 'en');
// $translation->addWord('работа', 'work', 'en');
//
// $translation->addWord('лес', 'wald', 'de');
// $translation->addWord('работа', 'arbit', 'de');
//
// $translation->setSrorage($this->dictionary);

$translation->addWord('толковый словарь', 'dictionary', 'en');
// $translation->setSrorage($translation->getDictionary());

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
