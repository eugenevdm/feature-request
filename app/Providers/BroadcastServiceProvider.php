<?php

namespace App\Providers;

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

        Broadcast::channel('order.*', function () {
            return true;
//            return $user->id === Order::findOrNew($orderId)->user_id;
        });

//        /*
//         * Authenticate the user's personal channel...
//         */
//        Broadcast::channel('App.User.*', function () {
//            return true;
////            return (int) $user->id === (int) $userId;
//        });
    }
}
