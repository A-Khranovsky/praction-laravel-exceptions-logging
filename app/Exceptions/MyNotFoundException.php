<?php


namespace App\Exceptions;


use Throwable;

class MyNotFoundException extends \Exception
{
    public function context()
    {
        return ['MyContext' => 'Tried to open a non-existent page'];
    }

    public function __construct($message = "Page is not found.", $code = 404, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function render($request)
    {
        return response()->view(
            'errors.404',
            [
                'message' => $this->getMessage()
            ],
            404
        );
    }
}
