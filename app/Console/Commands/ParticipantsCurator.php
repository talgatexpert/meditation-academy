<?php

namespace App\Console\Commands;

use App\Jobs\SendParticipantCuratorNotAssignedNotification;
use App\Models\Participant;
use Carbon\CarbonPeriod;
use Illuminate\Console\Command;

class ParticipantsCurator extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'participants:curator';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notifies managers and administrators if a curator has not been assigned to participants for a long time';

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
        // Находим всех подтвержденных активных участников без куратора, у которых прошло более 6 часов с
        // момента подтверждения и по которым еще не было уведомления менеджерам\админам
        $now = now();
        $participants = Participant::whereNull('curator_id')->whereIn('curator_pending_level', [0, 1])
            ->whereNotNull('verified_at')->where('verified_at', '<=', $now->copy()->subHours(6))->get();
        foreach ($participants as $participant) {
            // Формируем промежутки нерабочего времени (с 23 ночи до 6 утра по мск)
            $nowAfterHours1 = CarbonPeriod::create($now->copy()->subDay()->setTime(23, 0), $now->copy()->setTime(6, 0));
            $nowAfterHours2 = CarbonPeriod::create($now->copy()->setTime(23, 0), $now->copy()->addDay()->setTime(6, 0));
            $verifiedAtAfterHours1 = CarbonPeriod::create($participant->verified_at->copy()->subDay()->setTime(23, 0), $participant->verified_at->copy()->setTime(6, 0));
            $verifiedAtAfterHours2 = CarbonPeriod::create($participant->verified_at->copy()->setTime(23, 0), $participant->verified_at->copy()->addDay()->setTime(6, 0));

            // Определяем начальное и конечное время для расчетов, пропуская при этом нерабочее время
            $startTime = $verifiedAtAfterHours1->contains($participant->verified_at) ? $verifiedAtAfterHours1->getEndDate() : ($verifiedAtAfterHours2->contains($participant->verified_at) ? $verifiedAtAfterHours2->getEndDate() : $participant->verified_at);
            $endTime = $nowAfterHours1->contains($now) ? $nowAfterHours1->getStartDate() : ($nowAfterHours2->contains($now) ? $nowAfterHours2->getStartDate() : $now);

            // Определяем, сколько минут участник без куратора
            if ($endTime->day > $startTime->day) {
                $pendingMinutes = $startTime->diffInMinutes($verifiedAtAfterHours2->getStartDate()) + $endTime->diffInMinutes($nowAfterHours1->getEndDate());
            } else {
                $pendingMinutes = $startTime->diffInMinutes($endTime, false);
            }

            if ($participant->curator_pending_level == Participant::CURATOR_PENDING_LEVEL_NONE && $pendingMinutes >= 360) {
                // Если куратор не был назначен участнику через 6 рабочих часов, уведомляем всех менеджеров
                $participant->curator_pending_level = Participant::CURATOR_PENDING_LEVEL_MANAGER;
                $participant->save();
                dispatch(new SendParticipantCuratorNotAssignedNotification($participant));
            } elseif ($participant->curator_pending_level == Participant::CURATOR_PENDING_LEVEL_MANAGER && $pendingMinutes >= 600) {
                // Если куратор не был назначен участнику через 10 рабочих часов, уведомляем всех админов
                $participant->curator_pending_level = Participant::CURATOR_PENDING_LEVEL_ADMIN;
                $participant->save();
                dispatch(new SendParticipantCuratorNotAssignedNotification($participant));
            }
        }
    }

}
