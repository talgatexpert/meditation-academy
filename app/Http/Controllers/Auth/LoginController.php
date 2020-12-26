<?php

namespace App\Http\Controllers\Auth;

use App\Events\ParticipantCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Blacklist;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Validation\Rule;

class LoginController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:participant');
    }

    /**
     * Вход/Регистрация участника
     *
     * @param LoginRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        // Проверяем email на наличие в черном списке
        if (Blacklist::check($request->email)) {
            return response()->json([
                'status' => 'OK',
                'popup' => [
                    'title' => 'Отказ в регистрации',
                    'text' => 'Доступ к курсу ограничен по решению администратора ресурса.'
                ],
            ]);
        }

        // Проверяем, существует ли участник с таким именем или email'ом среди активных или неподтвержденных свежих
        $participant = Participant::where('name', $request->name)->orWhere('email', $request->email)->first();
        if ($participant) {
            // Если мы имеем полное совпадение (имя и email)
            if (\Str::lower($participant->name) === \Str::lower($request->name) && $participant->email === $request->email) {
                // Если участник не подтвердил свой email
                if (!$participant->isVerified()) {
                    // Пробуем повторно зарегистрировать участника
                    return $this->register($request, $participant);
                }

                // Авторизуем участника
                \Auth::guard('participant')->login($participant);
                $ckname = Auth::guard('participant')->getRecallerName();
                Cookie::queue($ckname, Cookie::get($ckname), env("COOKIES_LIFETIME", 20160));
            } else {
                // Проверяем, совпадает ли только имя или только email
                if (\Str::lower($participant->name) === \Str::lower($request->name)) {
                    // Если совпадает только имя, сообщаем, что такой участник уже зарегистрирован
                    return response()->json([
                        'status' => 'ERROR',
                        'message' => 'К сожалению, ваши данные не прошли проверку.',
                        'errors' => [
                            'name' => 'Сейчас это имя занято, выберете другое',
                        ],
                    ], 422, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],JSON_UNESCAPED_UNICODE);
                } elseif ($participant->email === $request->email) {
                    // Если совпадает только email и участник неподтвержденный, значит он просто пытается
                    // зарегистрироваться под другим именем, это разрешено!
                    if (!$participant->isVerified()) {
                        // Пробуем повторно зарегистрировать участника
                        return $this->register($request, $participant);
                    } else {
                        // Подтвержденному участнику нельзя использовать тот же email
                        return response()->json([
                            'status' => 'ERROR',
                            'message' => 'К сожалению, ваши данные не прошли проверку.',
                            'errors' => [
                                'email' => 'Участник с таким email уже зарегистрирован',
                            ],
                        ], 422, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],JSON_UNESCAPED_UNICODE);
                    }
                }
            }
        } else {
            // Пробуем зарегистрировать участника
            return $this->register($request);
        }

        return response()->json([
            'status' => 'OK',
            'redirect' => route('home'),
        ]);
    }

    /**
     * Регистрация участника
     *
     * @param Request $request
     * @param Participant|null $participant
     * @return \Illuminate\Http\Response
     */
    protected function register(Request $request, Participant $participant = null)
    {
        // Может быть не более 2х попыток регистрации участника
        if ($participant && $participant->attempts >= 2) {
            return response()->json([
                'status' => 'OK',
                'popup' => [
                    'title' => 'Что-то пошло не так?',
                    'text' => 'Вы пытались зарегистрироваться несколько раз подряд. Если вы не получили от нас письмо, напишите, пожалуйста, об этом на почту 7steps@7steps.ru'
                ],
            ]);
        }

        // Используем транзакцию
        try {
            \DB::beginTransaction();

            // Создаем участника (если его еще нет) со случайным аватаром
            if (!$participant) {

                $participant = Participant::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'avatar' => url('assets/img/avatar-' . rand(1, 24) . '.svg'),
                ]);
            } else {
                // Меняем имя участника (при необходимости) и увеличиваем счетчик попыток регистрации
                $participant->name = $request->name;
                $participant->increment('attempts');
                $participant->save();
            }

            // Участник создан
            event(new ParticipantCreated($participant));

            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollBack();

            // Логируем ошибку
            \Log::error(__METHOD__ . ' : ' . $e->getMessage(), ['participant' => $participant ?? null]);

            return response()->json([
                'status' => 'ERROR',
                'message' => 'К сожалению, не удалось зарегистрировать участника.',
            ]);
        }

        return response()->json([
            'status' => 'OK',
            'popup' => [
                'title' => 'Подтвердите ваш email',
                'text' => 'Мы выслали вам письмо на ' . $participant->email . '<br>Если письма нет, проверьте папку Спам или Промоакции',
            ],
        ]);
    }

}
