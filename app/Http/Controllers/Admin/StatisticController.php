<?php


namespace App\Http\Controllers\Admin;


use App\Models\Comment;
use App\Models\Participant;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{
    public function index()
    {
        $yearAgo = Carbon::today()->subYear();
        $activeCurators = User::active()->curators()
            ->withCount(['participants' => function (Builder $query) use ($yearAgo) {
                $query->hasCurator()->verified()->withoutTrashed();
            },
                'participants as step1' => function ($query) {
                    $query->where('participants.step', 1);
                },
                'participants as step2' => function ($query) {
                    $query->where('participants.step', 2);
                }, 'participants as step3' => function ($query) {
                    $query->where('participants.step', 3);
                },
                'participants as step4' => function ($query) {
                    $query->where('participants.step', 4);
                },
                'participants as step5' => function ($query) {
                    $query->where('participants.step', 5);
                },
                'participants as step6' => function ($query) {
                    $query->where('participants.step', 6);
                },
                'participants as step7' => function ($query) {
                    $query->where('participants.step', 7);
                },
                'participants as graduate' => function ($query) use ($yearAgo) {
                    $query->where('participants.graduate', Participant::IS_GRADUATE)->where('participants.graduated_at', '>=', $yearAgo);
                },
            ])->get();
        $curators = $activeCurators ?  $activeCurators : null;
        $curator_ids = $activeCurators ? $activeCurators->pluck('id') : null;
        if ($curator_ids) {
           $total = [
                'participants'          => DB::table('participants')->whereIn('curator_id', $curator_ids)->count(),
                'step1'                 => DB::table('participants')->whereIn('curator_id', $curator_ids)->where('step', 1)->count(),
                'step2'                 => DB::table('participants')->whereIn('curator_id', $curator_ids)->where('step', 2)->count(),
                'step3'                 => DB::table('participants')->whereIn('curator_id', $curator_ids)->where('step', 3)->count(),
                'step4'                 => DB::table('participants')->whereIn('curator_id', $curator_ids)->where('step', 4)->count(),
                'step5'                 => DB::table('participants')->whereIn('curator_id', $curator_ids)->where('step', 5)->count(),
                'step6'                 => DB::table('participants')->whereIn('curator_id', $curator_ids)->where('step', 6)->count(),
                'step7'                 => DB::table('participants')->whereIn('curator_id', $curator_ids)->where('step', 7)->count(),
                'graduate'              => DB::table('participants')->whereIn('curator_id', $curator_ids)->where('participants.graduate', Participant::IS_GRADUATE)->where('participants.graduated_at', '>=', $yearAgo)->count(),
            ];
            $total = json_decode(json_encode($total, false));
        }else{
            $total = null;
        }

        return view('pages.admin.statistics.index', compact('curators', 'total'));
    }
}
