<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class WebRTCSignal implements ShouldBroadcast
{

    public $data;
    public $to;

    public function __construct($data, $to)
    {
        $this->data = $data;
        $this->to = $to;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('call.' . $this->to);
    }
}
