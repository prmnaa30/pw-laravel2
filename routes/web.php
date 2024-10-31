<?php

use App\Http\Controllers\ProfileDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/profile', [ProfileDataController::class, 'index'])->name('profile');

Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');