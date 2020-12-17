<?php


namespace App\Http\Controllers\Admin;

use App\Events\NewPostEvent;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Subscription;
use App\Models\User;
use App\Notifications\NewSubscriberNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubscriptionController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR]), 403);

        $users = Subscription::all();

        return view('pages.admin.subscribers.index', compact('users'));
    }

//    public function post()
//    {
//        return view('pages.admin.subscribers.post');
//    }
//    // Временная реализаци
//
//    public function createPost(Request $request)
//    {
//
//        $this->validate($request, [
//           'title' => 'required',
//           'content' => 'required'
//        ]);
//
//        $post = Post::create(['title' => $request->get('title'), 'content' => $request->get('content')]);
//        event(new NewPostEvent($post->title, Str::words($post->content,10)));
//        return redirect()->route('admin.subscribers.index');
//    }
}
