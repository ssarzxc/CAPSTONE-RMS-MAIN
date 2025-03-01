<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\RoleManagementController;

Route::get('/', function () {
    return view('welcome');
});


// --------------------------------- ADMIN -------------------------------------- //

// AUTHENTICATION
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

// DASHBOARD
    Route::get('/dashboard', function () {
        return view('st-admin.dashboard');
    })->name('dashboard');
});

// RESERVATIONS
Route::get('/reservations', function () {
    return view('st-admin.reservations');
})->name('reservations');


// ROOMS
Route::get('/rooms', function () {
    return view('st-admin.rooms');
})->name('rooms');

// SETTINGS

// User
Route::get('/users', [UserManagementController::class, 'index'])->name('users');
Route::get('/add-user', [UserManagementController::class, 'create'])->name('add-user');
Route::post('/store-user', [UserManagementController::class, 'store'])->name('store-user');
Route::get('/edit-user', [UserManagementController::class, 'edit'])->name('edit-user');

// Role
Route::get('/add-role', [RoleManagementController::class, 'create'])->name('add-role');
Route::post('/store-role', [RoleManagementController::class, 'store'])->name('store-role');

// PROFILE
Route::get('users/profile', function () {
    return view('st-admin.profile.profile');
})->name('profile');   

