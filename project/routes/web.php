<?php

use App\Http\Controllers\GuestRegisterController;
use App\Http\Controllers\LoginController;
use App\View\Components\GuestLayout;
// use App\View\Components\GuestLayout;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Jetstream Login for Employees
Route::get('/', [LoginController::class, 'index'])->name('welcome'); 

Route::group(['prefix' => 'guest'], function(){
    Route::get('/register', function(){
        return view('auth.guests.guest-register');
    })->name('auth.guests.register');
});