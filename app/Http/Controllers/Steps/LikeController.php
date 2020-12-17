<?php

namespace App\Http\Controllers\Steps;

use App\Http\Controllers\Controller;
use App\Http\Requests\Steps\LikeRequest;
use App\Models\CommentLike;

class LikeController extends Controller
{

    /**
     * Лайк комментарию
     *
     * @param LikeRequest $request
     * @return \Illuminate\Http\Response
     */
    public function like(LikeRequest $request)
    {
        if ($like = CommentLike::where('comment_id', $request->comment_id)->where($request->participant_id ? 'participant_id' : 'guest_uuid', $request->participant_id ?? $request->guest_uuid)->first()) {
            // Участник уже лайкал комментарий ранее, значит ставим\снимаем лайк
            $like->update(['active' => !$like->active]);
        } else {
            // Участник еще не лайкал комментарий, создаем запись
            $like = CommentLike::create($request->validated());
        }

        // Вычисляем общее кол-во лайков для комментария
        $total = CommentLike::where('comment_id', $like->comment_id)->where('active', true)->count();

        return response()->json([
            'status' => 'OK',
            'active' => $like->active ?? true,
            'total' => $total,
        ]);
    }

}
