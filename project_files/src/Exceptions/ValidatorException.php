<?php

namespace Baigiamasis\Exceptions;

use Exception;

class ValidatorException extends Exception
{
    public function __construct($message = "Netinkami duomenys.", $code = 400)
    {
        parent::__construct($message, $code);
    }
}