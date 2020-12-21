<?php

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    require __DIR__.'/web/situations.php';
});

require __DIR__.'/auth.php';
