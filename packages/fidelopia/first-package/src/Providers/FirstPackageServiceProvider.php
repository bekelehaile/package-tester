<?php

namespace Fidelopia\FirstPackage\Providers;

use Fidelopia\FirstPackage\Hello;
use Illuminate\Support\ServiceProvider;

class FirstPackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
//        $this->loadRoutesFrom(__DIR__ . "/../Routes/web.php");
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'first-package');
        $this->publishes([
            __DIR__ . '/../Resources/views' => resource_path('views/vendor/first-package')
        ], 'first-package-view');
    }

    public function register(): void
    {
        $this->app->bind('test-package', function () {
            return new Hello("John");
        });
    }
}
