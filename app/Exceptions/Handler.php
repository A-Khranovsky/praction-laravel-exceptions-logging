<?php

namespace App\Exceptions;

use ErrorException;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Log;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        // rendering the page with message
        $this->renderable(function (ErrorException $e) {
            throw new MyNotFoundException();
        });

        // logging to laravel.log all exceptions
//        $this->reportable(function (Exception $e) {
//            Log::warning($e->getMessage());
//        })->stop();

        $this->renderable(function (Exception $e) {
            switch ($e->getCode()) {
                case 401:
                    return response()->view(
                        'errors.401',
                        [
                            'message' => $e->getMessage()
                        ],
                        401
                    );
                case 403:
                    return response()->view(
                        'errors.403',
                        [
                            'message' => $e->getMessage()
                        ],
                        403
                    );
                case 404:
                    return response()->view(
                        'errors.404',
                        [
                            'message' => $e->getMessage()
                        ],
                        404
                    );
                default:
                    break;
            }
        });
    }
}
