<?php

use App\Http\Controllers\GuestAuthController;
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

//Frontend test pages
Route::get('/home', function () {
    return view('st-guest.home');
})->name('home');

Route::get('/test', function () {
    return view('st-admin.dashboard');
})->name('test-dashboard');

Route::get('/reservations', function () {
    return view('st-admin.new-reservations-view');
})->name('reservations');

Route::get('/rooms', function () {
    return view('st-admin.rooms-view');
})->name('rooms');

Route::get('/settings', function () {
    return view('st-admin.settings-permissions-view');
})->name('settings');

Route::get('/add-user', function () {
    return view('st-admin.settings-permissions-add-user');
})->name('add-user');

Route::get('/edit-user', function () {
    return view('st-admin.settings-permissions-edit-user');
})->name('edit-user');

Route::get('/add-role', function () {
    return view('st-admin.settings-permissions-add-role');
})->name('add-role');

Route::get('/debug', [UserController::class, 'index'])->name('user.view');

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

// Laravel Jetstream Default Authentication for Employees
Route::get('/', [LoginController::class, 'index'])->name('welcome'); 
Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::get('/register', function () { return view('auth.register'); })->name('register');

//Guests with specified blades
    //Guest Login - return login blade
    Route::get('guest/login', [GuestAuthController::class, 'showLoginForm'])->name('guest.login');
    //Post method for guest login submit
    Route::post('guest/login', [GuestAuthController::class, 'login']); 

    // Guest register - return register blade
    Route::get('guest/register', [GuestAuthController::class, 'showRegisterForm'])->name('guest.register');
    //Post method for guest register submit
    Route::post('guest/register', [GuestAuthController::class, 'register']);
    //Middleware
    Route::middleware('auth:guest')->group(function (){
        Route::get('/guest/dashboard', fn () => view('auth.guests.guest-dashboard'))->name('guest.dashboard'); 
        //For logging out
        Route::post('/guest/logout', [GuestAuthController::class, 'logout'])->name('guest.logout');
    });


