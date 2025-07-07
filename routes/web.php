<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// 🏠 Landing Page (akses publik)
Route::get('/', function () {
    return redirect()->route('login');
});

// 🔐 Semua route setelah login
Route::middleware(['auth'])->group(function () {

    // 🧑‍💼 Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // 🔒 SOC Panel
    Route::get('/soc', function () {
        return view('soc.index');
    })->name('soc');

    // 🔒 NOC Panel
    Route::get('/noc', function () {
        return view('noc.index');
    })->name('noc');

    // 🔓 Logout (harus POST sesuai Breeze)
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    // 👥 Manajemen User (boleh kamu tambahkan middleware nanti)
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
    });
});

// 🛡️ Route auth Breeze
require __DIR__.'/auth.php';
