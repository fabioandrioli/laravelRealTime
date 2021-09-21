<?php

namespace App\Listeners;

use App\Events\EvenetCreatePost;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyNewPostCreate
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
     * @param  EvenetCreatePost  $event
     * @return void
     */
    public function handle(EvenetCreatePost $event)
    {
         //dd($event->post);
    }
}
