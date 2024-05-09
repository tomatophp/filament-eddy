<?php

namespace TomatoPHP\FilamentEddy;

use Illuminate\Support\ServiceProvider;


class FilamentEddyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \TomatoPHP\FilamentEddy\Console\FilamentEddyInstall::class,
        ]);

        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/filament-eddy.php', 'filament-eddy');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/filament-eddy.php' => config_path('filament-eddy.php'),
        ], 'filament-eddy-config');

        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'filament-eddy-migrations');
        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'filament-eddy');

        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/filament-eddy'),
        ], 'filament-eddy-views');

        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'filament-eddy');

        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => base_path('lang/vendor/filament-eddy'),
        ], 'filament-eddy-lang');

        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }

    public function boot(): void
    {
        //you boot methods here
    }
}
