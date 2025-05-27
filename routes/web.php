<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\HomeController as DashboardHomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardHomeController::class, 'index'])->name('dashboard')->middleware(['auth']);