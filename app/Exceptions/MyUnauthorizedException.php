<?php

namespace App\Exceptions;

class MyUnauthorizedException extends \Exception
{
    public function context()
    {
        return ['MyContext' => 'Unauthorezed user'];
    }

    public function report()
    {
        return false; // if true will not be logging
    }

    public function render($request)
    {
        return response()->view(
            'errors.401',
            [
                'message' => $this->getMessage()
            ],
            401
        );
    }
}
