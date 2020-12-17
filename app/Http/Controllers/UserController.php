<?php


namespace App\Http\Controllers;

use App\Http\Requests\ParticipantRequest;
use App\Models\Message;


class UserController extends Controller
{
    public function userUpdate(ParticipantRequest $request)
    {

        $guard = \Auth::guard('participant');
        $user = $guard->user();
        $messages =$user->messages;
        foreach ($user->messages->all() as $message){

            $message->body = str_replace($user->name, $request->name, $message->body);
            $message->save();
        }
        $user->avatar = $request->get('image');
        $user->name = $request->get('name');
        $user->comment_visible = $request->get('comment') === "true" ? 1 : 0;
        $user->save();
        $content = view('includes.messages', compact('messages'))->render();
        return response()->json(['status' => 'OK', 'name' => $user->name, 'content' => $content, 'visible' => $user->comment_visible, 'img' => $user->avatar]);

    }

    public function getParticipant()
    {
        $guard = \Auth::guard('participant');
        if ($guard->check()){
            return response()->json(['status' => 'OK', 'visible' => $guard->user()->comment_visible, 'name' => $guard->user()->name]);
        }

    }
}
