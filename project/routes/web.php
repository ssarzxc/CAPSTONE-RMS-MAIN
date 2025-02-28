<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// --------------------------------- ADMIN -------------------------------------- //

// Authentication
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

// Dashboard
    Route::get('/dashboard', function () {
        return view('st-admin.dashboard');
    })->name('dashboard');
});


Route::get('/reservations', function () {
    return view('st-admin.reservations');
})->name('reservations');

Route::get('/rooms', function () {
    return view('st-admin.rooms');
})->name('rooms');

Route::get('/settings', function () {
    return view('st-admin.settings');
})->name('settings');


// Settings
Route::get('/settings/add-user', function () {
    return ("GRAHHH");
})->name('add-user');


Route::get('/settings/edit-user', function () {
    return ("GRAHHH");
})->name('edit-user');   

Route::get('/settings/add-role', function () {
    return ("GRAHHH");
})->name('add-role');   
