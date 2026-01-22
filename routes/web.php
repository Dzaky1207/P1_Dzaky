<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SumberSuratController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// staff
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
Route::post('/staff', [StaffController::class, 'store'])->name('staff.store');
Route::get('/staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');
Route::put('/staff/{id}', [StaffController::class, 'update'])->name('staff.update');
Route::delete('/staff/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');

// jenis
Route::get('jenis', [JenisController::class, 'index'])->name('jenis.index');
Route::get('jenis/view/{id}', [JenisController::class, 'show'])->name('jenis.view');
Route::get('jenis/create', [JenisController::class, 'create'])->name('jenis.create');
Route::post('jenis/store', [JenisController::class, 'store'])->name('jenis.store');
Route::delete('jenis/delete/{id}', [JenisController::class, 'destroy'])->name('jenis.delete');

// kelompok
Route::get('kelompok', [KelompokController::class, 'index'])->name('kelompok.index');
Route::get('kelompok/create', [KelompokController::class, 'create'])->name('kelompok.create');
Route::get('kelompok/{id}/edit', [KelompokController::class, 'edit'])->name('kelompok.edit');
Route::post('kelompok/store', [KelompokController::class, 'store'])->name('kelompok.store');
Route::delete('kelompok/{id}', [KelompokController::class, 'destroy'])->name('kelompok.destroy');

Route::get('/surat', [SuratController::class, 'index'])->name('surat.index');
Route::get('/surat/create', [SuratController::class, 'create'])->name('surat.create');
Route::post('/surat', [SuratController::class, 'store'])->name('surat.store');
Route::get('/surat/{id}/edit', [SuratController::class, 'edit'])->name('surat.edit');
Route::put('/surat/{id}', [SuratController::class, 'update'])->name('surat.update');
Route::delete('/surat/{id}', [SuratController::class, 'destroy'])->name('surat.destroy');

Route::get('/sumber/index', [SumberSuratController::class, 'index'])->name('sumber.index');

require __DIR__ . '/auth.php';
