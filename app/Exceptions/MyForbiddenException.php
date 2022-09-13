<?php


namespace App\Exceptions;


class MyForbiddenException extends \Exception
{
    public function context()
    {
        return ['MyContext' => 'Forbidden for user'];
    }
}
