<?php

namespace classes\translator;

/**
 *
 */
class Translator
{
    private $dictionary = ['en' => [], 'de' => []];
    private $language;

    public function __construct($language  = 'en')
    {
        $this->language = $language;

        $this->addWord('лес', 'forest', 'en');
        $this->addWord('работа', 'work', 'en');

        $this->addWord('лес', 'wald', 'de');
        $this->addWord('работа', 'arbit', 'de');
    }

    public function addWord(string $russianWord, string $translation, $language)
    {
        if ( array_key_exists($translation, $this->dictionary[$language]) ) {
            return;
        }

        $this->dictionary[$language][$translation] = $russianWord;
    }

    public function translate(string $word)
    {
        if ( array_key_exists($word, $this->dictionary[$this->language]) ) {
            return $this->dictionary[$this->language][$word];
        } else {
            return false;
        }
    }

    public function getDictionary()
    {
        return $this->dictionary;
    }
}
