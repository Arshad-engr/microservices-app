<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SaveUserDataListener
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     */
 

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event): void
    {
         // Log the received user data
         Log::info('User created event received', ['data' => $event]);
    }
}
