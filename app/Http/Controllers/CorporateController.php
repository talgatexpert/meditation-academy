<?php

namespace App\Http\Controllers;

use App\Http\Requests\CallbackRequest;
use App\Mail\Callback;
use Illuminate\Http\Request;

class CorporateController extends Controller
{

    /**
     * Корпоративным клиентам
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('pages.corporate');
    }

    /**
     * Форма заказа обратного звонка
     *
     * @param CallbackRequest $request
     * @return \Illuminate\Http\Response
     */
    public function callback(CallbackRequest $request)
    {
        // Отправляем письмо на специальный адрес
        \Mail::to(config('mail.addresses.callback'))->send(new Callback($request->validated()));

        return response()->json([
            'status' => 'OK',
            'popup' => [
                'title' => 'Спасибо за обращение<br>в нашу компанию!',
                'text' => 'Мы перезвоним вам в течение 24 часов',
            ],
        ]);
    }

}
