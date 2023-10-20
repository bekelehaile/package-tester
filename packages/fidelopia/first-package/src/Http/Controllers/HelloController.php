<?php

namespace Fidelopia\FirstPackage\Http\Controllers;

use Fidelopia\FirstPackage\Facades\FirstPackage;
use Illuminate\Contracts\View\View;

class HelloController
{
    public function index(): View
    {
        return view('first-package::home', [
            'message' => FirstPackage::hello()
        ]);
    }
}
