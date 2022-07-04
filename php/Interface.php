<?php

namespace php\inter;

/**
 *
 */
interface StringWriter
{
    public function writeString($str, $path);
}


/**
 *
 */
class FileWriter implements StringWriter
{
    public function writeString($str, $path)
    {
        file_put_contents($path, $str);
    }
}

/**
 *
 */
class ScreenWriter implements StringWriter
{
    public function writeString($str, $path)
    {
        echo $str;
    }
}


/**
 *
 */
class StringProcessor
{
    public $writer, $path;

    public function __construct(StringWriter $writer, string $path = '')
    {
        $this->writer = $writer;
        $this->path = $path;
    }

    public function write($str)
    {
        $this->writer->writeString($str, $this->path);
    }
}
