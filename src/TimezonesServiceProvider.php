<?php

namespace Saurav\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/saurav/timezones'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes/web.php';

        $this->app->make('Saurav\Timezones\TimezonesController');
    }
}
