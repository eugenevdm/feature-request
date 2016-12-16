<?php

namespace App\Listeners;

use Illuminate\Notifications\Events\NotificationSent;
use Log;

class LogBalance
{
    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NotificationSent  $event
     * @return void
     */
    public function handle(NotificationSent $event)
    {
        $result = $event->response;
        Log::info($result['remaining-balance']);
    }
}
