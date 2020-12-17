<?php

namespace App\Console\Commands;

use App\Models\Participant;
use Illuminate\Console\Command;

class ParticipantsUnverified extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'participants:unverified';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Archives participants who were not verified within 24 hours';

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
        // Помещаем в архив участников, которые не были подтверждены в течение 24 часов
        Participant::whereNull('verified_at')->where('created_at', '<=', now()->subDay())->delete();
    }

}
