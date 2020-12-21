<?php

use App\Http\Controllers\SituationsController;

Route::get('situations', [SituationsController::class, 'index'])->name('situations.index');
Route::get('situations/create', [SituationsController::class, 'create'])->name('situations.create');
