<?php

namespace php\inter;

use \php\storage as stor;

require_once 'Storage.php';

/**
 *
 */
interface StringWriter
{
    public function writeString($str);
}


/**
 * запись в файл
 */
class FileWriter implements StringWriter
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function writeString($str)
    {
        file_put_contents($this->path, $str);
        return $this->setSrorage($str);
    }
}


/**
 * интерфейс с наследием от класса Storage
 */
class FileWriterStor extends stor\Storage implements StringWriter
{
    public function writeString($str)
    {
        return $this->setSrorage($str);
    }
}

/**
 *
 */
class ScreenWriter implements StringWriter
{
    public function writeString($str)
    {
        echo $str;
    }
}


/**
 *
 */
class StringProcessor
{
    public $writer;

    public function __construct(StringWriter $writer)
    {
        $this->writer = $writer;
    }

    public function write($str)
    {
        $this->writer->writeString($str);
    }
}
