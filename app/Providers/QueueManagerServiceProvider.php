<?php

namespace App\Providers;

use App\QueueManager;
use Illuminate\Support\ServiceProvider;

class QueueManagerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('QueueManager', function ($app) {
            return new QueueManager();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
