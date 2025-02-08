<?php

use App\Http\Controllers\InterestController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::resource('photos', PhotoController::class);
    Route::resource('interests', InterestController::class);
    Route::get('test', [TestController::class, 'index'])->name('test.index');
    Route::post('validateTest', [TestController::class, 'validateTest'])->name('test.validate');
});
