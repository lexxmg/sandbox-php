<?php

namespace php\inter;

/**
 *
 */
interface StringWriter
{
    public function writeString($str);
}


/**
 *
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
