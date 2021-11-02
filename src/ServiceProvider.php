<?php

namespace InternationalInfo;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/international-info.php' => config_path('international-info.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../storage/international-info' => config('international-info.storage_path'),
            ], 'storage');

            $this->commands([
                //
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/international-info.php', 'international-info');
    }
}
