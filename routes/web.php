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

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\DashboardController::class, 'home'])->name('home');
    Route::get('/appointments', [App\Http\Controllers\DashboardController::class, 'appointments'])->name('appointments.index');
    Route::get('/clients', [App\Http\Controllers\DashboardController::class, 'clients'])->name('clients.index');
    Route::get('/orders', [App\Http\Controllers\DashboardController::class, 'orders'])->name('orders.index');
    Route::get('/inventory', [App\Http\Controllers\DashboardController::class, 'inventory'])->name('inventory.index');
    Route::get('/reports', [App\Http\Controllers\DashboardController::class, 'reports'])->name('reports.index');
    Route::get('/client-dashboard', [App\Http\Controllers\DashboardController::class, 'clientDashboard'])->name('client.dashboard');
});
