<?php

namespace App\Http\Controllers;



use App\Jobs\SendParticipantRemindNotification;
use App\Models\Comment;
use App\Models\Participant;
use App\Models\User;

use Carbon\Carbon;
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


}
