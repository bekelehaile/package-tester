<?php

namespace Fidelopia\FirstPackage\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Fidelopia\FirstPackage\Http\Controllers';

    public function map()
    {
        Route::namespace($this->namespace)->group(__DIR__ . '/../../routes/web.php');
    }

    protected function registerRoutes()
    {
    }
}
