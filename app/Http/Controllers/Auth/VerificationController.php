<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use Illuminate\Http\Request;

class VerificationController extends Controller
{

    /**
     * Подтверждение email участника
     *
     * @param Request $request
     * @param Participant $participant
     * @param string $hash
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify(Request $request,  $id, string $hash)
    {
        $participant = Participant::find($id);
        // Проверяем, не подтвержден ли уже участник, а так же сверяем хеш
        if (!$participant->isVerified() && hash_equals($hash, sha1($participant->email))) {
            // Подтверждаем участника
            $participant->verify();

            // Авторизуем участника
            \Auth::guard('participant')->login($participant, true);

            // Перенаправляем на страницу с письмами и показываем попап с поздравлениями
            return redirect()->route('messages.index')->with('popup', [
                'title' => 'Добро пожаловать на курс!',
                'text' => 'Вас уже ждет первое письмо с инструкциями.<br>Удачи!'
            ]);
        }
        elseif ($participant && $participant->isVerified() && hash_equals($hash, sha1($participant->email))){
            \Auth::guard('participant')->login($participant, true);
            return redirect()->route('messages.index');
        }

        return redirect()->route('home');
    }

}
