<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (DB::getDriverName() == 'mysql') {
            \Schema::defaultStringLength(191);
        }
        if (!$this->app->environment('local')) {
            \URL::forceScheme('https');
        }
    }
}
