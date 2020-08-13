<?php

namespace Coldxpress\Ticket;

use Illuminate\Support\ServiceProvider;

class TicketServiceProvider extends ServiceProvider
{

    public function boot()
    {

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views','ticket');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
//      $this->publishes([__DIR__.'/resources/views' => resource_path('views/web')],
//        'views');

    }

    public function register()
    {

    }
}
