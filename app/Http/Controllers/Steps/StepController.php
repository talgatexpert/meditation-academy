<?php

namespace App\Http\Controllers\Steps;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StepController extends Controller
{

    use AuthenticatesUsers;

    /**
     * StepController constructor.
     */
    public function __construct(Request $request)
    {
        // Регистрируем юзера если он пришел с токеном
        $this->authenticateUser($request);
    }


    /**
     * Шаг 1
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function step1(Request $request)
    {

        return view('pages.steps.1', CommentController::getComments(0, 1, false));
    }

    /**
     * Шаг 2
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function step2(Request $request)
    {
        return view('pages.steps.2', CommentController::getComments(0, 2, false));
    }

    /**
     * Шаг 3
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function step3(Request $request)
    {
        return view('pages.steps.3', CommentController::getComments(0, 3, false));
    }

    /**
     * Шаг 4
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function step4(Request $request)
    {
        // Гостю сюда нельзя, а авторизованному участнику нельзя переходить на шаг, который ему еще недоступен
        $guard = \Auth::guard('participant');
        $curators=\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR]);
            abort_if(!$curators && $guard->guest() || ($guard->check() && !$guard->user()->isStepAvailable(4)), 403);

        return view('pages.steps.4', CommentController::getComments(0, 4, false));
    }

    /**
     * Шаг 5
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function step5(Request $request)
    {
        // Гостю сюда нельзя, а авторизованному участнику нельзя переходить на шаг, который ему еще недоступен
        $guard = \Auth::guard('participant');
        $curators=\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR]);
        abort_if(!$curators && $guard->guest() || ($guard->check() && !$guard->user()->isStepAvailable(5)), 403);

        return view('pages.steps.5', CommentController::getComments(0, 5, false));
    }

    /**
     * Шаг 6
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function step6(Request $request)
    {
        // Гостю сюда нельзя, а авторизованному участнику нельзя переходить на шаг, который ему еще недоступен
        $guard = \Auth::guard('participant');
        $curators=\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR]);
        abort_if(!$curators && $guard->guest() || ($guard->check() && !$guard->user()->isStepAvailable(6)), 403);

        return view('pages.steps.6', CommentController::getComments(0, 6, false));
    }

    /**
     * Шаг 7
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function step7(Request $request)
    {
        // Гостю сюда нельзя, а авторизованному участнику нельзя переходить на шаг, который ему еще недоступен
        $guard = \Auth::guard('participant');
        $curators=\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR]);
        abort_if(!$curators && $guard->guest() || ($guard->check() && !$guard->user()->isStepAvailable(7)), 403);

        return view('pages.steps.7', CommentController::getComments(0, 7, false));
    }

    public function authenticateUser(Request $request)
    {
        if ($request->has('token')) {
            $user = User::where('remember_token', $request->get('token'))->first();
            if (!is_null($user)){
                \Auth::loginUsingId($user->id);
            }
        }elseif ($request->has('participant_token')){
            $participant = Participant::where('remember_token', $request->get('participant_token'))->first();
            if (!is_null($participant)){
                \Auth::guard('participant')->login($participant);
            }
        }

    }

}
