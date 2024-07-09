<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    if (Auth::User()->usertype == 'admin') {
        return view('admin/index');
    }
    if (Auth::User()->usertype == 'admin_pelatihan') {
        return view('admin_pelatihan/index');
    }
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

route::get('admin/index', [HomeController::class, 'index1'])->middleware(['auth', 'admin']);
route::get('admin_pelatihan/index', [HomeController::class, 'index2'])->middleware(['auth', 'admin_pelatihan']);

// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('administrator', \App\Http\Controllers\AdministratorController::class);
Route::resource('admin_pelatihan', \App\Http\Controllers\AdminPelatihanController::class);
Route::resource('jurusan', \App\Http\Controllers\JurusanController::class);
Route::resource('gelombang', \App\Http\Controllers\GelombangController::class);
Route::resource('level', \App\Http\Controllers\LevelController::class);
Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('pesertapelatihan', \App\Http\Controllers\PesertaPelatihanController::class);
Route::resource('daftarpeserta', \App\Http\Controllers\DaftarPesertaController::class);
Route::resource('riwayat', \App\Http\Controllers\RiwayatController::class);
