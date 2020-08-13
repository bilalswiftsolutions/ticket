<?php

namespace Coldxpress\Ticket;

use Illuminate\Support\ServiceProvider;

class TicketServiceProvider extends ServiceProvider
{

    public function boot()
    {
//dd(asset('ticket/assets/plugins/global/plugins.bundle.css'));
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views','ticket');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

      $this->publishes([__DIR__.'/resources/ticket' => public_path()],
        'views');

    }

    public function register()
    {

    }
}
