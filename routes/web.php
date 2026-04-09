<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Beranda;
use App\Livewire\Galeri;
use App\Livewire\Blog;
use App\Livewire\Kontak;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\GaleriController as AdminGaleriController;

Route::get('/', Beranda::class)->name('beranda');
Route::get('/galeri', Galeri::class)->name('galeri');
Route::get('/blog', Blog::class)->name('blog');
Route::get('/kontak', Kontak::class)->name('kontak');

// ── Admin Panel ──────────────────────────────────────────────────────────────
Route::prefix('wp-admin')->name('admin.')->group(function () {

    // Guest routes (login / logout)
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('admin');

    // Protected routes
    Route::middleware('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Posts
        Route::resource('posts', PostController::class)->except(['show']);

        // Galeri
        Route::resource('galeri', AdminGaleriController::class)->except(['show']);
    });
});
