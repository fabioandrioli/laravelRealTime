<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Queue\SerializesModels;
use App\Models\Post;

class EventCreatePost implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $post;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    // public function broadcastOn()
    // {
    //     return new PrivateChannel('channel-name');
    // }

    public function broadcastOn()
    {
        //para uso publico
        return new Channel('postCreated');
    }

    // public function broadcastWith()
    // {
    //     return [
    //         'post' => [
    //             'name' => $this->post->title,
    //             'date' => Carbon::parse($this->post->created_at)->format('d/m/Y'),
    //         ]
    //     ];
    // }

    // public function broadcastAs()
    // {
    //     return 'testing';
    // }
}
