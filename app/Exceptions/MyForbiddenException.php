<?php


namespace App\Exceptions;


class MyForbiddenException extends \Exception
{
    public function context()
    {
        return ['MyContext' => 'Forbidden for user'];
    }

    public function render($request)
    {
        return response()->view(
            'errors.403',
            [
                'message' => $this->getMessage()
            ],
            403
        );
    }
}
