<?php

namespace b;

require_once 'Class_A.php';

/**
 *
 */
class Class_B extends \a\Class_A
{
    public function __construct()
    {
        $this->message = 'Hello world';
    }

    public function showMessage()
    {
        return $this->message;
    }
}
