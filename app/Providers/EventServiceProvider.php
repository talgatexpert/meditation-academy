<?php

namespace App\Providers;

use App\Events\CommentSent;
use App\Events\ParticipantCreated;
use App\Events\ParticipantGraduated;
use App\Events\ParticipantNewCommented;
use App\Events\ParticipantNextStep;
use App\Events\ParticipantVerified;
use App\Listeners\SendCertificateNotification;
use App\Listeners\SendEmailVerificationNotification;
use App\Listeners\SendNewCommentNotification;
use App\Listeners\SendNewParticipantNotification;
use App\Listeners\SendNextStepMessage;
use App\Listeners\SendCuratorRepliedNotification;
use App\Listeners\SendWelcomeMessage;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class  EventServiceProvider extends ServiceProvider
{

    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        ParticipantCreated::class => [
            SendEmailVerificationNotification::class,
        ],
        ParticipantVerified::class => [
            SendWelcomeMessage::class,
            SendNewParticipantNotification::class,
        ],
        ParticipantNextStep::class => [
            SendNextStepMessage::class,
            SendCuratorRepliedNotification::class,
        ],
        ParticipantGraduated::class => [
          SendCertificateNotification::class
        ],
        CommentSent::class => [
            SendNewCommentNotification::class,
        ],
        ParticipantNewCommented::class => [
            SendCuratorRepliedNotification::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

}
