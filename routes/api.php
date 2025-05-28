<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// --- Auth Sanctum Example ---
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// --- Resource Routes (CRUD Otomatis) ---
use App\Http\Controllers\ProgramKerjaController;
use App\Http\Controllers\LokasiTanamController;
use App\Http\Controllers\PartisipasiProgramController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\PohonController;
use App\Http\Controllers\LaporanKegiatanController;
use App\Http\Controllers\RelawanController;
use App\Http\Controllers\KomentarLaporanController;
use App\Http\Controllers\LampiranDokumentasiController;

Route::apiResource('program-kerja', ProgramKerjaController::class);
Route::apiResource('lokasi-tanam', LokasiTanamController::class);
Route::apiResource('partisipasi-program', PartisipasiProgramController::class);
Route::apiResource('user', UserController::class);
Route::apiResource('donasi', DonasiController::class);
Route::apiResource('mitra', MitraController::class);
Route::apiResource('pohon', PohonController::class);
Route::apiResource('laporan-kegiatan', LaporanKegiatanController::class);
Route::apiResource('relawan', RelawanController::class);
Route::apiResource('komentar-laporan', KomentarLaporanController::class);
Route::apiResource('lampiran-dokumentasi', LampiranDokumentasiController::class)->only(['index', 'store', 'show', 'destroy']);

// --- Admin Dashboard Route (Statistik, dst) ---
use App\Http\Controllers\Admin\DashboardController;
Route::get('/admin/statistics', [DashboardController::class, 'statistics']);

// --- Route khusus lain bisa ditambah di bawah ini (misal: chart, filter, search, dsb) ---

use App\Http\Controllers\ProfileController;

// Endpoint dengan autentikasi Sanctum
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show']);
    Route::put('/profile', [ProfileController::class, 'update']);
});

// Endpoint publik untuk debugging dan jika ada masalah auth
// Mengembalikan data dummy agar UI tetap berfungsi
Route::get('/profile-demo', function() {
    return response()->json([
        'name' => 'Demo User',
        'email' => 'demo@tetengerbumi.org',
        'phone' => '08123456789',
        'photo' => 'https://randomuser.me/api/portraits/men/32.jpg',
        'programs' => [
            ['name' => 'Wali Pohon'],
            ['name' => 'Wakaf Pohon']
        ],
        'donations' => [
            ['date' => '2025-05-15', 'amount' => 150000],
            ['date' => '2025-05-01', 'amount' => 75000]
        ]
    ]);
});
