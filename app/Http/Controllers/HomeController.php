<?php

namespace App\Http\Controllers;



use App\Models\Comment;
use App\Models\Participant;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Максимальный шаг, до которого может дойти участник
    public const MAX_STEP = 7;
    // Максимальное количество отзывов
    public const  MAX_REVIEWS_COUNT = 10;

    /**
     * Главная
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {


        $comments = Comment::hasReviews()->get();
        if ($comments->isEmpty()) {
            $comments = null;
        }
        $graduatedParticipantsCount = Participant::onlyGraduate()->count();
        $curatorsCount = User::curators()->count();
        return view('pages.home', compact('curatorsCount', 'comments', 'graduatedParticipantsCount'));
    }

    public function token(Request $request)
    {
        $userID = \Auth::guard('participant')->id(); // If you use a different auth system, do your checks here
        $userIDInQueryParam = $request->get('user_id');
        $pushNotifications = new \Pusher\PushNotifications\PushNotifications([
            "instanceId" => strval(env('PUSHER_BEAMS_INSTANCE_ID')),
            "secretKey" => strval(env('PUSHER_BEAMS_SECRET_KEY')),
        ]);

        if ($userID != $userIDInQueryParam) {
            return response('Inconsistent request', 401);
        } else {
            $beamsToken = $pushNotifications->generateToken(strval($userID));
            return response()->json($beamsToken);
        }
    }

}
