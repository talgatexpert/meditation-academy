<?php

namespace App\Http\Controllers;

use App\Jobs\SendCuratorNotRepliedNotification;
use App\Models\Comment;
use App\Models\MessageTemplate;
use App\Models\Participant;
use App\Models\User;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public const MAX_PAGINATE_REVIEWS = 20;

    public function index(Request $request)
    {
        $reviews = Comment::hasReviews()->paginate(self::MAX_PAGINATE_REVIEWS);
        if ($reviews->isEmpty()) {
            $reviews = null;
        }
        if ($request->ajax()){
            if ($reviews){

                    $result = [
                        'status' => 'OK',
                        'reviews' => view('includes.reviews.review', compact('reviews'))->render(),
                        'next_page' => $reviews->nextPageUrl(),
                    ];
                    return response()->json($result, 200);
            }
        }
        return view('pages.reviews', compact('reviews'));
    }



}
