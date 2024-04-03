<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{slug}', [HomeController::class, 'detail'])->name('home.detail');

Auth::routes();

Route::resource('dashboard', DashboardController::class)->middleware('auth');
