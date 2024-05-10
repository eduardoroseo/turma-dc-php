<?php

namespace src\exceptions;

use Exception;

class DivisionByZeroException extends Exception
{
    public function __construct()
    {
        parent::__construct("Division by zero!");
    }
}
