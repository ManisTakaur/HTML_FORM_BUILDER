<?php

namespace formBuilder\htmlFormBuilder;

use Illuminate\Support\ServiceProvider;

class htmlFormBuilderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'htmlFormBuilder');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/formBuilder/htmlFormBuilder'),
        ]);
    }
}
