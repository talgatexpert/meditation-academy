<?php


namespace App\Http\Controllers\Steps;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public const IS_GRADUATED = 1;
    public function index(Request $request)
    {
        // Гостю сюда нельзя, а авторизованному участнику нельзя переходить на шаг, который ему еще недоступен
        $guard = \Auth::guard('participant');
        abort_if($guard->guest() || ($guard->check() && !$guard->user()->isStepAvailable(7)), 403);
        $certificate = \Auth::guard('participant')->user()->graduated_at === self::IS_GRADUATED ? \Auth::guard('participant')->user()->certificate : false ;

        return view('pages.steps.certificate', compact('certificate'));
    }

}
