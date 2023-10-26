<?php

use Fidelopia\FirstPackage\Http\Controllers\HelloController;

Route::prefix('users')->group(function () {
    Route::get('/', [HelloController::class, 'index']);
    Route::get('/create', [HelloController::class, 'create']);
    Route::post('/', [HelloController::class, 'store']);
    Route::get('/{id}', [HelloController::class, 'show']);
    Route::get('/{id}/edit', [HelloController::class, 'edit']);
    Route::put('/{id}', [HelloController::class, 'update']);
    Route::delete('/{id}', [HelloController::class, 'destroy']);
});
