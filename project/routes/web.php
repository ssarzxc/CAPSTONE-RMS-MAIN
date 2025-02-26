<?php

use App\Http\Controllers\GuestRegisterController;
use App\Http\Controllers\LoginController;
use App\View\Components\GuestLayout;
// use App\View\Components\GuestLayout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home', function () {
    return view('st-guest.home');
})->name('dashboard');

Route::get('/debug', [UserController::class, 'index'])->name('user.view');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//Jetstream Login for Employees
Route::get('/', [LoginController::class, 'index'])->name('welcome');

Route::group(['prefix' => 'guest'], function(){
    Route::get('/register', function(){
        return view('auth.guests.guest-register');
    })->name('auth.guests.register');
});

