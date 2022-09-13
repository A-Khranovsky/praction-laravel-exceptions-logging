<?php


namespace App\Exceptions;


class MyUnauthorizedException extends \Exception
{
    public function context()
    {
        return ['MyContext' => 'Unauthorezed user'];
    }
}
