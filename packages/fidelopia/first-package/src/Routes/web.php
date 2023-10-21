<?php

use Fidelopia\FirstPackage\Http\Controllers\HelloController;

require 'user.php';

Route::get(config('first-package.route'), [HelloController::class, 'index']);
