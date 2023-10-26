<?php

namespace Fidelopia\FirstPackage\Providers;

use Fidelopia\FirstPackage\Hello;
use Illuminate\Support\ServiceProvider;

class FirstPackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->resources();
        $this->publish();
    }

    public function register(): void
    {
        // binding
        $this->app->bind('test-package', function () {
            return new Hello("John");
        });
        // dependencies
        $this->mergeConfigFrom($this->basePath('config/first-package.php'), 'first-package');
    }

    protected function basePath($path): string
    {
        return __DIR__ . '/../../' . $path;
    }
    protected function publish()
    {
        $this->publishes([$this->basePath('resource/lang') => lang_path('vendor/first-package'), 'first-package-trans']);
        $this->publishes([$this->basePath('database/migrations') => database_path('migrations')], 'first-package-migration');
        $this->publishes([
            $this->basePath('resources/views') => resource_path('views/vendor/first-package')
        ], 'first-package-view');
        $this->publishes([
            $this->basePath('config/first-package.php') => base_path('config/first-package.php')
        ], 'first-package-config');
    }

    protected function resources()
    {
        $this->views();
    }

    protected function routes()
    {
        // $this->loadRoutesFrom( $this->basePath('Routes/web.php"));
    }

    protected function views()
    {
        $this->loadViewsFrom($this->basePath('resources/views'), 'first-package');
        $this->loadMigrationsFrom($this->basePath('database/migrations'));
        $this->loadTranslationsFrom($this->basePath('resources/lang'), 'first-package');
    }
}
