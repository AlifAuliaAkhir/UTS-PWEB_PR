<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

Route::get('/', function () {
    return view('login');
});

Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
Route::get('/login', [LoginController::class, 'index'])->name('admin.login');