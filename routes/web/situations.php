<?php

use App\Http\Controllers\SituationsController;

Route::get('situations/create', [SituationsController::class, 'create'])->name('situations.create');
