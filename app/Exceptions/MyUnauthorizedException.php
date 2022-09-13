<?php


namespace App\Exceptions;


class MyUnauthorizedException extends \Exception
{
    public function context()
    {
        return ['MyContext' => 'Unauthorezed user'];
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
