<?php

namespace App\Events;
use Redis;
use App\Events\Event;
use App\Subscribe;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NotiEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    //email is brocast data therefore we set to public
    public $email;
    public function __construct(Subscribe $email)
    {
        //

        $this->email=$email;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {

        return ['noti'];
    }

}
