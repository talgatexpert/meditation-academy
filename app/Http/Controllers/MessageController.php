<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    /**
     * Письма
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Находим все сообщения участника
        $messages = \Auth::guard('participant')->user()->messages()->get();

        return view('pages.messages.index', compact('messages'));
    }

    /**
     * Чтение письма
     *
     * @param Request $request
     * @param Message $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        $participant = \Auth::guard('participant')->user();

        // Только владелец письма может его прочитать
        abort_if($message->participant_id != $participant->id, 403);

        $data = ['status' => 'OK'];

        if ($message->isNew()) {
            $message->read();

            // Подсчитываем и возвращаем кол-во новых сообщений участника
            $data['new_messages'] = $participant->getNewMessages();
        }

        return response()->json($data);
    }

}
