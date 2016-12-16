<?php

namespace App\Listeners;

use Log;
use App\Events\PopularFeature;

class NotifyManagement
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
     * @param PopularFeature $event
     * @return void
     */
    public function handle(PopularFeature $event)
    {

        Log::info('event listener handle');
    }
}
