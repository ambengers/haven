<?php

use App\Http\Controllers\HomeController;

Route::group(['middleware' => ['auth']], function () {
    require __DIR__ . '/web/situations.php';
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes(['register' => false]);
