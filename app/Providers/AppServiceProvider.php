<?php

namespace App\Providers;

use App\View\Components\CarsListComponent;
use App\View\Components\DriversComponents;
use Illuminate\Support\Facades\Blade;
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
        Blade::component('cars-list', CarsListComponent::class);
        Blade::component('drivers-list', DriversComponents::class);
    }
}
