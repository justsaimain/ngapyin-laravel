<?php

namespace Justsaimain\Ngapyin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Http\Kernel;
use Justsaimain\Ngapyin\Console\Commands\CreateAdmin;

class NgapyinServiceProvider extends ServiceProvider
{


    public function boot(Kernel $kernel)
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'admin_login');


        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__ . '/config/auth.php' => config_path('auth.php'),
            ], 'Ngapyin-Auth');

            $this->publishes([
                __DIR__ . '/assets' => public_path('vendor/assets'),
            ], 'Ngapyin-Assets');

            if (!class_exists('CreateAdminsTable')) {
                $this->publishes([
                    __DIR__ . '/database/migrations/create_admins_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_admins_table.php'),
                    // you can add any number of migrations here
                ], 'Ngapyin-Migrations');
            }
            $this->commands([
                CreateAdmin::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/auth.php', 'auth');
    }
}
