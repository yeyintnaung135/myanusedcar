<?php

namespace App\Listeners;

use App\Events\NotiEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Redis;

class NotiEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NotiEvent $event
     * @return void
     */
    public function handle(NotiEvent $event)
    {
        //

    }
}
