<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Prwnr\Streamer\Contracts\Event;

class PodcastProcessed implements Event
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        //
    }


    public function name(): string
    {
        return 'podcast.processed';
    }

    public function type(): string
    {
        return 'event';
    }

    public function payload(): array
    {
        return [
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
        ];
    }
}
