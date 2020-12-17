<?php

namespace App\Console;

use App\Console\Commands\CuratorNotReplied;
use App\Console\Commands\ParticipantsCurator;
use App\Console\Commands\ParticipantsInactive;
use App\Console\Commands\ParticipantsUnverified;
use App\Console\Commands\PreviewClear;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        ParticipantsCurator::class,
        ParticipantsInactive::class,
        ParticipantsUnverified::class,
        PreviewClear::class,
        CuratorNotReplied::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Архивируем неактивных участников каждую минуту
        $schedule->command(ParticipantsInactive::class)->everyMinute();

        // Архивируем неподтвержденных участников каждую минуту
        $schedule->command(ParticipantsUnverified::class)->everyMinute();

        // Проверяем наличие куратора у участников каждые 5 минут
        $schedule->command(ParticipantsCurator::class)->everyFiveMinutes();

        // Оповещаем куратора о том что необходимо ответить проверяем каждый час
        $schedule->command(CuratorNotReplied::class)->hourly();

        // Очищаем папку с временными файлами предпросмотра каждый день в полночь
        $schedule->command(PreviewClear::class)->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');
    }

}
