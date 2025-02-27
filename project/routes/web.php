<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('st-admin.dashboard');
    })->name('dashboard');
});


// Admin Pages 

Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations');

Route::get('/rooms', function () {
    return view('st-admin.rooms');
})->name('rooms');

Route::get('/settings', function () {
    return view('st-admin.settings');
})->name('settings');