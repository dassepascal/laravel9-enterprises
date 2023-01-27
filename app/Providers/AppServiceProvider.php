<?php

namespace App\Providers;

use App\Models\Enterprise;
use App\Observers\EnterpriseObserver;
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
        Enterprise::observe(EnterpriseObserver::class);
    }
}
