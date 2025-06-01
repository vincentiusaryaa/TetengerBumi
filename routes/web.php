<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\DashboardController;

// Pastikan Route dan Inertia tersedia untuk semua rute
if (!function_exists('Route')) {
    throw new \Exception('Route facade is not available');
}

if (!class_exists('Inertia\Inertia')) {
    throw new \Exception('Inertia class is not available');
}

Route::get('/', function () {
    return Inertia::render('LandingPage');
});

Route::get('/home', function () {
    return Inertia::render('Home'); 
})->name('home');

Route::get('/aboutus', function () {
    return Inertia::render('AboutUs'); 
})->name('AboutUs');

Route::get('/landingpage', function () {
    return Inertia::render('LandingPage'); 
})->name('LandingPage');

Route::get('/lokasi', function () {
    return Inertia::render('Lokasi'); 
})->name('Lokasi');

Route::get('/lokasi/{id}', function ($id) {
    return Inertia::render('Lokasi/Detail', ['id' => $id]);
})->name('lokasi.detail');

Route::get('/donasi', function () {
    return Inertia::render('Donasi'); 
})->name('Donasi');

Route::get('/daftar-donatur', function () {
    return Inertia::render('DaftarDonatur'); 
})->name('DaftarDonatur');

Route::get('/proker', function () {
    return Inertia::render('Proker'); 
})->name('Proker');

// Profile Routes
Route::get('/profile', function () {
    return Inertia::render('Profile');
})->middleware(['auth', 'verified'])->name('profile.index');

Route::get('/profile/photo/edit', function () {
    return Inertia::render('Profile/EditPhoto');
})->middleware(['auth', 'verified'])->name('profile.photo.edit');

// Tambahkan rute POST untuk upload foto profil
Route::post('/profile/photo', [\App\Http\Controllers\ProfileController::class, 'updatePhoto'])->name('profile.photo.update');

Route::get('/walipohon', function () {
    return Inertia::render('WaliPohon'); 
})->name('WaliPohon');

Route::get('/wakafpohon', function () {
    return Inertia::render('WakafPohon'); 
})->name('WakafPohon');

Route::get('/charity', function () {
    return Inertia::render('Charity'); 
})->name('Charity');

// Route login/register: menggunakan controller dari auth.php (lihat di auth.php)
// CATATAN: Tidak perlu definisi route lagi di sini karena sudah ada di auth.php
// Route::middleware('guest')->group(function () {
//     Route::get('/login', function () {
//         return Inertia::render('auth/Login');
//     })->name('login');
//     Route::get('/register', function () {
//         return Inertia::render('auth/Register');
//     })->name('register');
// });

// Grup rute untuk admin
Route::middleware(['auth', 'verified'])->group(function () {
    // Rute yang memerlukan role admin
    Route::prefix('admin')->middleware('role:admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/dashboard', function () {
            return Inertia::render('Dashboard');
        })->name('dashboard');
        Route::get('/programkerja', function () {
            return Inertia::render('Admin/ProgramKerja');
        })->name('admin.programkerja');
    });
    
    // Rute yang bisa diakses oleh user terautentikasi
    Route::get('/profile', function () {
        return Inertia::render('Profile');
    })->name('profile');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
