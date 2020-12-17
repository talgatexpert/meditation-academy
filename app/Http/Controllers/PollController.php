<?php

namespace App\Http\Controllers;

use App\Http\Requests\PollRequest;

class PollController extends Controller
{

    /**
     * Опрос
     *
     * @param PollRequest $request
     * @return \Illuminate\Http\Response
     */
    public function vote(PollRequest $request)
    {
        $participant = \Auth::guard('participant')->user();

        // Проверяем, не участвовал ли еще участник (если он авторизован) в опросе
        if (!$participant || ($participant && $participant->isNotVotedAtPoll($request->name))) {
            $values = [];
            foreach ($request->options as $option) {
                $values[] = [
                    'name' => $request->name,
                    'option' => $option,
                    'participant_id' => $participant ? $participant->id : null,
                    'created_at' => now()->toDateTimeString(),
                ];
            }
            \DB::table('polls')->insert($values);
        }

        return response()->json(['status' => 'OK']);
    }

}
