<?php

namespace App\Listeners;

use App\Events\UserActionEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserActionListener
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
     * @param  UserActionEvent  $event
     * @return void
     */
    public function handle(UserActionEvent $event)
    {
       return redirect()->away('https://api.upstox.com/index/dialog/authorize?apiKey=qb6ke1Ojpb4c1ICyOGoKU9AOFSW8YVAm5TKs794m&redirect_uri=http://goalgotrade.com/&response_type=code');
        
    }
}
