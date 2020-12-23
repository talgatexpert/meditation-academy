<?php


namespace App\Http\Controllers\Admin;


use App\Models\Participant;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class StatisticController extends Controller
{
    public function index()
    {
        $curators = User::active()->curators()
            ->withCount(['participants' => function (Builder $query) {
                $query->hasCurator()->verified()->withoutTrashed();
            },
            'participants as step1' => function($query){
            $query->where('participants.step', 1);
        },
            'participants as step2' => function($query){
                $query->where('participants.step', 2);
            },            'participants as step3' => function($query){
                $query->where('participants.step', 3);
            },
            'participants as step4' => function($query){
                $query->where('participants.step', 4);
            },
            'participants as step5' => function($query){
                $query->where('participants.step', 5);
            },
            'participants as step6' => function($query){
                $query->where('participants.step', 6);
            },
            'participants as step7' => function($query){
                $query->where('participants.step', 7);
            },
            'participants as graduated' => function($query){
                $query->where('participants.graduate', Participant::IS_GRADUATE)->where('participants.graduated_at', '>=', Carbon::today()->subYear());
            },
        ])
            ->get();
        return view('pages.admin.statistics.index', compact('curators'));
    }
}
