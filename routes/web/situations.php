<?php

use App\Http\Livewire\Situations\Create;
use App\Http\Controllers\SituationsController;

Route::get('situations', [SituationsController::class, 'index'])->name('situations.index');
Route::get('situations/create', Create::class)->name('situations.create');
