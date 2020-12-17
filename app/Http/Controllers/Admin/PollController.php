<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;

class PollController extends Controller
{

    /**
     * Статистика опросов
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        // Опросы
        $polls = [
            'reasons' => [
                'effectiveness' => ['name' => 'Повышение эффективности', 'count' => 0, 'percent' => 0],
                'emotional_stability' => ['name' => 'Контроль эмоций', 'count' => 0, 'percent' => 0],
                'positive_experiences' => ['name' => 'Жизнь в позитиве', 'count' => 0, 'percent' => 0],
                'self_awareness' => ['name' => 'Духовный рост', 'count' => 0, 'percent' => 0],
            ],
            'steps' => [
                'researches' => ['name' => 'Научные исследования медитации', 'count' => 0, 'percent' => 0],
                'experience' => ['name' => 'Личный опыт освоения медитации', 'count' => 0, 'percent' => 0],
                'stories' => ['name' => 'Рассказы людей о влиянии медитации на жизнь', 'count' => 0, 'percent' => 0],
                'techniques' => ['name' => 'Больше разных техник и подходов', 'count' => 0, 'percent' => 0],
                'philosophy' => ['name' => 'Философская сторона вопроса', 'count' => 0, 'percent' => 0],
                'facts' => ['name' => 'Интересные факты из жизни просветленных мастеров', 'count' => 0, 'percent' => 0],
                'other' => ['name' => 'Другие темы', 'count' => 0, 'percent' => 0],
            ],
        ];

        // Общее кол-во голосов в опросах
        $total = [
            'reasons' => \DB::table('polls')->where('name', 'reasons')->count(),
            'steps' => \DB::table('polls')->where('name', 'steps')->count(),
        ];

        // Формируем данные опроса в истории успеха участников
        foreach (\DB::table('polls')->where('name', 'reasons')->groupBy('option')->get(\DB::raw('`option`, count(*) as cnt')) as $poll) {
            $polls['reasons'][$poll->option]['count'] = $poll->cnt;
            $polls['reasons'][$poll->option]['percent'] = round(($poll->cnt * 100) / $total['reasons']);
        }

        // Формируем данные опросов на страницах заданий
        foreach (\DB::table('polls')->where('name', 'steps')->groupBy('option')->get(\DB::raw('`option`, count(*) as cnt')) as $poll) {
            $polls['steps'][$poll->option]['count'] = $poll->cnt;
            $polls['steps'][$poll->option]['percent'] = round(($poll->cnt * 100) / $total['steps']);
        }

        return view('pages.admin.polls.index', compact('polls', 'total'));
    }

}
