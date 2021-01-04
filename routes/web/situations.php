<?php

use App\Http\Livewire\Situations\Index;
use App\Http\Livewire\Situations\Create;

Route::get('situations', Index::class)->name('situations.index');
Route::get('situations/create', Create::class)->name('situations.create');
