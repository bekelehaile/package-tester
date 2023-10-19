<?php

namespace Fidelopia\FirstPackage\Providers;

use Fidelopia\FirstPackage\Hello;
use Illuminate\Support\ServiceProvider;

class FirstPackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . "/../../routes/web.php");
    }

    public function register(): void
    {
        $this->app->bind('test-package', function () {
            return new Hello("Bekele Haile");
        });
    }
}
