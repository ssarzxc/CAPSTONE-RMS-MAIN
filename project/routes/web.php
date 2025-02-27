<?php

use Illuminate\Support\Facades\Route;
use App\Http\Admin\Controllers\ReservationController;
use App\Http\Controllers\AuthenticationController;

Route::get('/', function () {
    return view('welcome');
});


// ------------------------------ ADMIN -------------------------------------------------- //

// Authentication

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

// Dashboard
    Route::get('admin/dashboard', function () {
        return view('st-admin.dashboard');
    })->name('dashboard');

});

// Reservations
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations');

// Rooms
Route::get('/rooms', function () {
    return view('st-admin.rooms');
})->name('rooms');

// Settings
Route::get('/settings', function () {
    return view('st-admin.settings');
})->name('settings');





// ------------------------------ GUEST -------------------------------------------------- //

// Authentication

    //Guest Login - return login blade
    Route::get('guest/login', [AuthenticationController::class, 'showLoginForm'])->name('guest.login');
    //Post method for guest login submit
    Route::post('guest/login', [AuthenticationController::class, 'login']); 

    // Guest register - return register blade
    Route::get('guest/register', [AuthenticationController::class, 'showRegisterForm'])->name('guest.register');
    //Post method for guest register submit
    Route::post('guest/register', [AuthenticationController::class, 'register']);
    //Middleware
    Route::middleware('auth:guest')->group(function (){
        Route::get('/guest/dashboard', fn () => view('auth.guests.guest-dashboard'))->name('guest.dashboard'); 
        //For logging out
        Route::post('/guest/logout', [AuthenticationController::class, 'logout'])->name('guest.logout');
    });

