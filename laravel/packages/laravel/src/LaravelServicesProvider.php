<?php

namespace Laravel;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Routing\Router;
use Laravel\Providers\RouteServiceProvider;

class LaravelServicesProvider extends ServiceProvider{
    function register(): void
    {

    }

    function boot ( Kernel $kernel , Router $router ) {
        App ::register ( RouteServiceProvider::class );
    }
}
