<?php

namespace Justsaimain\Ngapyin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Http\Kernel;
use Justsaimain\Ngapyin\Console\Commands\CreateAdmin;

class NgapyinServiceProvider extends ServiceProvider
{


    public function boot(Kernel $kernel)
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/views','admin_login');


        if ($this->app->runningInConsole()) {

            $this->publishes([
              __DIR__.'/config/auth.php' => config_path('auth.php'),
            ], 'auth');

            $this->publishes([
                __DIR__.'/assets' => public_path('vendor/assets'),
              ], 'assets');

          }

          if ($this->app->runningInConsole()) {
            $this->commands([
                CreateAdmin::class,
            ]);
        }

    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/auth.php','auth');
    }


}
