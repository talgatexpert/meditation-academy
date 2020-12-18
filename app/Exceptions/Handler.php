<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Foundation\Http\Exceptions\MaintenanceModeException;
use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;

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
     * @param \Exception $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Exception $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function render($request, Exception $exception)
    {
        if ($request->expectsJson()) {
            return $this->renderExceptionAsJson($request, $exception);
        }

        return parent::render($request, $exception);
    }

    /**
     * Render an exception into a JSON response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Exception $e
     * @return \Illuminate\Http\Response
     */
    protected function renderExceptionAsJson(Request $request, Exception $e)
    {
        $data = ['status' => 'ERROR'];

        $statusCode = method_exists($e, 'getStatusCode') ? $e->getStatusCode() : null;
        if ($statusCode == 401 || $e instanceof AuthenticationException) {
            $status = 401;
            $data['message'] = 'К сожалению, у вас нет прав доступа к этим данным.';
        } elseif ($statusCode == 403 || $e instanceof AuthorizationException) {
            $status = 403;
            $data['message'] = 'К сожалению, вам запрещен доступ к этим данным.';
        } elseif ($statusCode == 404 || $e instanceof NotFoundHttpException || $e instanceof ModelNotFoundException) {
            $status = 404;
            $data['message'] = 'К сожалению, данные, которые вы ищете, не могут быть найдены.';
        } elseif ($statusCode == 405 || $e instanceof MethodNotAllowedException) {
            $status = 405;
            $data['message'] = 'К сожалению, метод запроса не разрешен.';
        } elseif ($statusCode == 419 || $e instanceof TokenMismatchException) {
            $status = 419;
            $data['message'] = 'К сожалению, ваш сеанс истек. Пожалуйста, обновите страницу и попробуйте снова.';
        } elseif ($statusCode == 422 || $e instanceof ValidationException) {
            $status = 422;
            if ($request->is('admin/*')) {
                $data['message'] = $e->validator->errors()->first();
            } else {
                $data['message'] = 'К сожалению, ваши данные не прошли проверку.';
                $data['errors'] = [];
                foreach ($e->validator->errors()->getMessages() as $field => $messages) {
                    $data['errors'][$field] = \Arr::first($messages);
                }
            }
        } elseif ($statusCode == 503 || $e instanceof MaintenanceModeException) {
            $status = 503;
            $data['message'] = 'У нас идет техническое обслуживание. Пожалуйста, зайдите попозже.';
        } else {
            $status = 500;
            $data['message'] = 'Случилась непредвиденная ошибка.';
        }

        return response()->json($data, $status);
    }

}
