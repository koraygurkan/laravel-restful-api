<?php

namespace App\Exceptions;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\ResultType;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Throwable;
use Illuminate\Database\Eloquent\ModelNotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Exception $exception)
    {
        //dd($exception);
        if ($exception instanceof ModelNotFoundHttpException)
            return  (new ApiController)->apiResponse(ResultType::Error,null, 'Kayıt Bulunamadı',JsonResponse::HTTP_NOT_FOUND);

        return parent::render($request, $exception);
    }
}
