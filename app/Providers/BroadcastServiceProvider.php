<?php

namespace blog\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        require base_path('routes/channels.php');

        Broadcast::channel('App.Models.User.*', function ($user, $userId) {
            return (int) $user->id === (int) $userId;
        });
    }
}
