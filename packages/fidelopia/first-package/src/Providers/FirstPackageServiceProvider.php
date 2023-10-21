<?php

namespace Fidelopia\FirstPackage\Providers;

use Fidelopia\FirstPackage\Hello;
use Illuminate\Support\ServiceProvider;

class FirstPackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
//        $this->loadRoutesFrom( $this->basePath('Routes/web.php"));
        $this->loadViewsFrom($this->basePath('Resources/views'), 'first-package');
        $this->publishes([
            $this->basePath('Resources/views') => resource_path('views/vendor/first-package')
        ], 'first-package-view');

        $this->publishes([
            $this->basePath('Config/first-package.php') => base_path('config/first-package.php')
        ], 'first-package-config');
    }

    protected function basePath($path): string
    {
        return __DIR__ . '/../' . $path;
    }

    public function register(): void
    {
        $this->app->bind('test-package', function () {
            return new Hello("John");
        });

        $this->mergeConfigFrom($this->basePath('Config/first-package.php'), 'first-package');
    }

}
