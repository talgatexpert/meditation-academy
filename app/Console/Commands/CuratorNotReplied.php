<?php

namespace App\Console\Commands;

use App\Jobs\SendCuratorNotRepliedNotification;
use App\Models\Participant;
use Carbon\CarbonPeriod;
use Illuminate\Console\Command;

class CuratorNotReplied extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'curator:not-replied';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command checks if the curator did not respond to the participant\'s comment within a certain time';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $now = now();
        $participants = Participant::whereNotNull('curator_id')
            ->whereNotNull('step_reported_at')->where('step_reported_at', '<=', $now->copy()->subHours(6))->get();
        foreach ($participants as $participant) {
            // Формируем промежутки нерабочего времени (с 23 ночи до 6 утра по мск завтрашний и прошлый дни)
            $nowAfterHours1 = CarbonPeriod::create($now->copy()->subDay()->setTime(23, 0), $now->copy()->setTime(6, 0));
            $nowAfterHours2 = CarbonPeriod::create($now->copy()->setTime(23, 0), $now->copy()->addDay()->setTime(6, 0));
            $verifiedAtAfterHours1 = CarbonPeriod::create($participant->step_reported_at->copy()->subDay()->setTime(23, 0), $participant->step_reported_at->copy()->setTime(6, 0));
            $verifiedAtAfterHours2 = CarbonPeriod::create($participant->step_reported_at->copy()->setTime(23, 0), $participant->step_reported_at->copy()->addDay()->setTime(6, 0));
            // Определяем начальное и конечное время для расчетов, пропуская при этом нерабочее время
            $startTime = $verifiedAtAfterHours1->contains($participant->step_reported_at) ? $verifiedAtAfterHours1->getEndDate() : ($verifiedAtAfterHours2->contains($participant->step_reported_at) ? $verifiedAtAfterHours2->getEndDate() : $participant->step_reported_at);
            $endTime = $nowAfterHours1->contains($now) ? $nowAfterHours1->getStartDate() : ($nowAfterHours2->contains($now) ? $nowAfterHours2->getStartDate() : $now);

            // Определяем, сколько минут участник без куратора
            if ($endTime->day > $startTime->day) {
                $pendingMinutes = $startTime->diffInMinutes($verifiedAtAfterHours2->getStartDate()) + $endTime->diffInMinutes($nowAfterHours1->getEndDate());
            } else {
                $pendingMinutes = $startTime->diffInMinutes($endTime, false);
            }

            // Напоминаем кураторам и менеджерам что комментарий не отвечен 6 часов
            if ($participant->curator_pending_level === Participant::CURATOR_PENDING_LEVEL_NONE && $pendingMinutes >= 360){
                $participant->curator_pending_level = Participant::CURATOR_PENDING_LEVEL_MANAGER;
                $participant->save();
                dispatch(new SendCuratorNotRepliedNotification($participant));
            }elseif ($participant->curator_pending_level === Participant::CURATOR_PENDING_LEVEL_MANAGER && $pendingMinutes >= 600){
                $participant->curator_pending_level = Participant::CURATOR_PENDING_LEVEL_ADMIN;
                $participant->save();
                // Напоминаем кураторам,менеджерам, администраторам что комментарий не отвечен 10 часов
                dispatch(new SendCuratorNotRepliedNotification($participant));
            }
        }
    }
}
