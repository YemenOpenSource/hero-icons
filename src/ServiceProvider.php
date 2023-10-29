<?php

namespace YOS\HeroIcons;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as SupportServiceProvider;
use YOS\HeroIcons\Console\Commands\GenerateHeroIconsClass;

class ServiceProvider extends SupportServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'heroicons');
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        AboutCommand::add('HeroIcons List Generator', fn () => ['Version' => '1.0.0']);

        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateHeroIconsClass::class,
            ]);

            $this->publishes([
              __DIR__.'/config/config.php' => config_path('heroicons.php'),
            ], 'config');
        
          }
    }
}
