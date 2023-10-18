<?php

namespace Fidelopia\FirstPackage\Facades;

use Illuminate\Support\Facades\Facade;

class FirstPackage extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return "test-package";
    }
}
