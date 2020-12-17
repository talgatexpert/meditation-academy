<?php

namespace App\Http\Controllers;

use App\Events\NewPostEvent;
use App\Jobs\SendNewSubscriberNotification;
use App\Models\Subscription;
use App\Notifications\NewSubscriberNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class SubscriptionController extends Controller
{
    public const IS_ACTIVE = 1;
    public const  DISABLED = 0;

    public function subscribe(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|unique:subscriptions'
        ]);
        $sub = Subscription::create(['email' => $request->get('email'), 'token' => Str::random(50), 'active' => self::IS_ACTIVE]);
//        event(new NewPostEvent('hello world'));

        $sub->notify(new NewSubscriberNotification($sub));
        return response()->json(['status' => 'Подписчик  успешно добавленны']);
    }

    public function unsubscribe($token)
    {
        $subscriber = Subscription::where('token', $token)->firstOrFail();
        if ($subscriber->active === self::IS_ACTIVE){
            $subscriber->active = 0;
            $subscriber->token = NULL;

            $subscriber->save();
        }
        return redirect()->route('home');
    }
}
