<?php

namespace App\Console\Commands;

use App\Models\Participant;
use Illuminate\Console\Command;

class ParticipantsInactive extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'participants:inactive';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Archives participants who were not active within 2 weeks';

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
        // Помещаем в архив участников, которые не были активны в течение 2 недель
        Participant::whereNotNull('last_activity_at')->where('last_activity_at', '<=', now()->subWeeks(2))->delete();
    }

}
