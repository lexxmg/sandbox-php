<?php

namespace classes\translator;

require_once 'Storage.php';

use \classes\storage as stor;

/**
 *
 */
class Translator extends stor\Storage
{
    private $dictionary = ['en' => [], 'de' => []];
    private $language;

    public function __construct($language  = 'en', $fileName = '')
    {
        $this->getStorage($fileName);

        $this->dictionary = $this->getArrayStorage();

        $this->language = $language;
    }

    public function addWord(string $russianWord, string $translation, $language)
    {
        if ( array_key_exists($translation, $this->dictionary[$language]) ) {
            return;
        }

        $this->dictionary[$language][$translation] = $russianWord;

        $this->setSrorage($this->dictionary);
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
