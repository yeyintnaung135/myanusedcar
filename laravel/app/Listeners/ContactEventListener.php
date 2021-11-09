<?php

namespace App\Listeners;

use App\Events\ContactEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEventListener
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
     * @param  ContactEvent  $event
     * @return void
     */
    public function handle(ContactEvent $event)
    {
        //
    }
}
