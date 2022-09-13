<?php


namespace App\Exceptions;


use Throwable;

class MyNotFoundException extends \Exception
{
    public function __construct($message = "Page is not found.", $code = 404, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
