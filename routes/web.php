<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Beranda;
use App\Livewire\Galeri;
use App\Livewire\Blog;
use App\Livewire\Kontak;

Route::get('/', Beranda::class)->name('beranda');
Route::get('/galeri', Galeri::class)->name('galeri');
Route::get('/blog', Blog::class)->name('blog');
Route::get('/kontak', Kontak::class)->name('kontak');
