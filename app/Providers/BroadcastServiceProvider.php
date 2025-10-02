<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Broadcasting\BroadcastServiceProvider as ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
