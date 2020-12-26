<?php

namespace App\Console\Commands;

use App\Jobs\SendParticipantRemindNotification;
use App\Models\Participant;
use Illuminate\Console\Command;

class ParticipantRemindMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'participant:remind';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remind message after 4 step to 7 step';

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
        $participants = Participant::with('comments')->get();
        if ($participants) {
            foreach ($participants as $participant) {
                $reportedAtStep = $participant->comments->whereNull('parent_id')->where('step', $participant->step)->count() > 0;
                if ($participant->participantHasNotComment($reportedAtStep)) {
                    dispatch(new SendParticipantRemindNotification($participant));
                }
            }
        }
    }
}
