<?php


namespace App\Exceptions;


class MyUnauthorizedException extends \Exception
{
    public function context()
    {
        return ['order_id' => 1];
    }
}
