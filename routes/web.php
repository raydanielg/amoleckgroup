<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/divisions/ames', function () {
    return view('divisions.ames');
})->name('divisions.ames');

Route::get('/divisions/aphamko', function () {
    return view('divisions.aphamko');
})->name('divisions.aphamko');

Route::get('/divisions/asca', function () {
    return view('divisions.asca');
})->name('divisions.asca');

Route::get('/divisions/physiotherapy', function () {
    return view('divisions.physiotherapy');
})->name('divisions.physiotherapy');

Route::get('/divisions/amotech', function () {
    return view('divisions.amotech');
})->name('divisions.amotech');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/appointments', function () {
        return view('appointments');
    })->name('appointments.index');

    Route::get('/clients', function () {
        return view('clients');
    })->name('clients.index');
});
