<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessStoryController extends Controller
{

    /**
     * Повышение эффективности
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function effectiveness(Request $request)
    {
        return view('pages.success-stories.effectiveness');
    }

    /**
     * Контроль эмоций
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function emotionalStability(Request $request)
    {
        return view('pages.success-stories.emotional-stability');
    }

    /**
     * Жизнь в позитиве
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function positiveExperiences(Request $request)
    {
        return view('pages.success-stories.positive-experiences');
    }

    /**
     * Духовный рост
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function selfAwareness(Request $request)
    {
        return view('pages.success-stories.self-awareness');
    }

}
