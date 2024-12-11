<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'landing'])->name('landing');
Route::get('/profil-usaha', [PagesController::class, 'profile'])->name('profile');
