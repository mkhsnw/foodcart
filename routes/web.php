<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'landing'])->name('landing');
Route::get('/profil-usaha', [PagesController::class, 'profile'])->name('profile');
Route::get('/menu', [PagesController::class, 'menu'])->name('menu');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/kontak', [PagesController::class, 'contact'])->name('contact');
