<?php

use Illuminate\Support\Facades\Route;
use Swandam\Core\Http\Controllers\DashboardController;
use Swandam\Core\Http\Controllers\LoginController;

Route::middleware(['swandam_guest'])->controller(LoginController::class)->group(function () {
    Route::get('login', 'show')->name('login.index');
    Route::post('login', 'login')->name('login');
});

Route::middleware(['swandam_auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});
