<?php


namespace App\Exceptions;


class MyForbiddenException extends \Exception
{
    public function context()
    {
        return ['order_id' => 1];
    }
}
