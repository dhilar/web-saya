<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Admin\AppSettingController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SertifikasiController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\AuthController;

// Rute untuk halaman landing page
Route::get('/', [LandingPageController::class, 'index'])->name('home');

// Rute untuk halaman about
Route::get('/about', [LandingPageController::class, 'about'])->name('about');

// Rute untuk produk
Route::get('/produk', [LandingPageController::class, 'product'])->name('produk.index');
Route::get('/project', [LandingPageController::class, 'project'])->name('produk.project');
Route::get('/advantage', [LandingPageController::class, 'advantages'])->name('produk.advantage');

// Rute untuk keunggulan
Route::get('/keunggulan', [LandingPageController::class, 'keunggulan'])->name('produk.unggulan');
Route::get('/sertifikasi', [LandingPageController::class, 'sertifikasi'])->name('produk.sertifikasi');

// Rute untuk galeri
Route::get('/galeri', [LandingPageController::class, 'galeri'])->name('galeri');

// Rute untuk halaman kontak
Route::get('/contact', [LandingPageController::class, 'kontak'])->name('kontak');

// Route untuk mengirim email
Route::post('/send-message', [LandingPageController::class, 'sendEmail'])->name('send.message');

// Rute untuk halaman testimoni
Route::get('/testimoni', function () {
    return view('layouts.testimonial');
})->name('testimoni');

// Rute untuk admin dashboard
Route::get('/admin', function () {
    $appSettings = \App\Models\AppSetting::first();
    return view('Admin.layouts.index', compact('appSettings'));
})->name('admin.dashboard')->middleware('auth'); // Menambahkan middleware auth

// Rute untuk mengakses AppSetting di halaman admin
Route::get('admin/app-settings', [AppSettingController::class, 'index'])->name('admin.appSettings')->middleware('auth');

// Rute untuk mengupdate AppSetting
Route::post('admin/app-settings/update', [AppSettingController::class, 'update'])->name('admin.updateAppSettings')->middleware('auth');

// Rute untuk profile admin
Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile')->middleware('auth');

// Rute untuk about di admin
Route::get('/admin/about', [AboutController::class, 'edit'])->name('admin.editAbout')->middleware('auth');
Route::post('/admin/about', [AboutController::class, 'update'])->name('admin.updateAbout')->middleware('auth');

// Rute untuk project di admin
Route::get('/admin/project', [ProjectController::class, 'index'])->name('admin.project.index')->middleware('auth');
Route::get('/admin/project/create', [ProjectController::class, 'create'])->name('admin.project.create')->middleware('auth');
Route::post('/admin/project/store', [ProjectController::class, 'store'])->name('admin.project.store')->middleware('auth');
Route::get('/admin/project/{id}/edit', [ProjectController::class, 'edit'])->name('admin.project.edit')->middleware('auth');
Route::post('/admin/project/{id}/update', [ProjectController::class, 'update'])->name('admin.project.update')->middleware('auth');
Route::delete('/admin/project/{id}/delete', [ProjectController::class, 'destroy'])->name('admin.project.delete')->middleware('auth');

// Rute untuk produk
Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index')->middleware('auth');
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create')->middleware('auth');
Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store')->middleware('auth');
Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit')->middleware('auth');
Route::put('/admin/products/{product}', [ProductController::class, 'update'])->name('admin.products.update')->middleware('auth');
Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy')->middleware('auth');

// Rute untuk sertifikasi
Route::get('/admin/sertifikasi', [SertifikasiController::class, 'index'])->name('admin.sertifikasi.index');
Route::get('/admin/sertifikasi/create', [SertifikasiController::class, 'create'])->name('admin.sertifikasi.create');
Route::post('/admin/sertifikasi', [SertifikasiController::class, 'store'])->name('admin.sertifikasi.store');
Route::get('/admin/sertifikasi/{sertifikasi}', [SertifikasiController::class, 'show'])->name('admin.sertifikasi.show');
Route::get('/admin/sertifikasi/{sertifikasi}/edit', [SertifikasiController::class, 'edit'])->name('admin.sertifikasi.edit');
Route::put('/admin/sertifikasi/{sertifikasi}', [SertifikasiController::class, 'update'])->name('admin.sertifikasi.update');
Route::delete('/admin/sertifikasi/{sertifikasi}', [SertifikasiController::class, 'destroy'])->name('admin.sertifikasi.destroy');


// Rute untuk tim
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('team', TeamController::class);
});

// Rute untuk registrasi dan login
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
