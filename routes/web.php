<?php

use App\Http\Controllers\PencairanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengumumanController;
// use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index']);

// Route::get('/login', function () {
//     return view('layouts/login');
// });

// Route::post('/login', [AuthController::class, 'login'])->name('login');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
//Register
Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/register', [UserController::class, 'store']);
//login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/masyarakat', [MasyarakatController::class, 'index'])->name('masyarakat.index');
    Route::get('/masyarakat/create', [MasyarakatController::class, 'create'])->name('masyarakat.create');
    Route::post('/masyarakat', [MasyarakatController::class, 'store'])->name('masyarakat.store');
    Route::get('/masyarakat/{id}/edit', [MasyarakatController::class, 'edit'])->name('masyarakat.edit');
    Route::put('/masyarakat/{id}', [MasyarakatController::class, 'update'])->name('masyarakat.update');
    Route::delete('/masyarakat/{id}', [MasyarakatController::class, 'destroy'])->name('masyarakat.destroy');
    Route::get('/masyarakat/{id}', [MasyarakatController::class, 'show'])->name('masyarakat.show');


    //pengumuman
    // Menampilkan form untuk membuat pengumuman
    Route::get('/pengumuman/create', [PengumumanController::class, 'create'])->name('pengumuman.create');

    // Menyimpan pengumuman yang baru dibuat
    Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
    Route::get('/pengumuman/create', [PengumumanController::class, 'create'])->name('pengumuman.create');
    Route::post('/pengumuman', [PengumumanController::class, 'store'])->name('pengumuman.store');
    Route::get('/pengumuman/{pengumuman}', [PengumumanController::class, 'show'])->name('pengumuman.show');
    Route::get('/pengumuman/{pengumuman}/edit', [PengumumanController::class, 'edit'])->name('pengumuman.edit');
    Route::put('/pengumuman/{pengumuman}', [PengumumanController::class, 'update'])->name('pengumuman.update');
    Route::delete('/pengumuman/{pengumuman}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');

    Route::resource('penerima', PenerimaController::class);

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/admin' , function(){
        return view('contents.admin');
    });

    // Menampilkan halaman pencairan
    Route::get('/pencairan', [PencairanController::class, 'index'])->name('pencairan.index');

    // Menampilkan halaman tambah pencairan
    Route::get('/pencairan/create', [PencairanController::class, 'create'])->name('pencairan.create');

    // Menyimpan data pencairan baru
    Route::post('/pencairan/store', [PencairanController::class, 'store'])->name('pencairan.store');

    // Menampilkan halaman edit pencairan
    Route::get('/pencairan/edit/{id}', [PencairanController::class, 'edit'])->name('pencairan.edit');

    // Update data pencairan
    Route::put('/pencairan/update/{id}', [PencairanController::class, 'update'])->name('pencairan.update');

    // Menghapus data pencairan
    Route::delete('/pencairan/delete/{id}', [PencairanController::class, 'destroy'])->name('pencairan.destroy');
    Route::post('/pencairan/laporan', [PencairanController::class, 'laporan'])->name('pencairan.laporan');





});

