<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StrukturController;

// ========================
// Routes untuk User/Public
// ========================

Route::view('/', 'loadingpage')->name('loadingpage');
Route::view('/home', 'home')->name('home');
Route::view('/organisasi', 'organisasi')->name('organisasi');
Route::view('/ppid', 'ppid')->name('ppid');
Route::view('/informasi', 'informasi')->name('informasi');
Route::view('/foto&video', 'foto&video')->name('Dokumentasi');

// ========================
// Routes untuk Admin Panel
// ========================

Route::get('/admin/organisasi', [StrukturController::class, 'index'])->name('admin.organisasi');
Route::post('/admin/organisasi', [StrukturController::class, 'upload'])->name('admin.organisasi.upload');
