<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Menampilkan daftar user
Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Menampilkan form tambah user
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Menyimpan data user (Menggunakan mass assignment dengan $fillable)
Route::post('/user', [UserController::class, 'store'])->name('user.store');

// Menampilkan form edit user berdasarkan id
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');

// Menyimpan perubahan data user
Route::post('/user/{id}', [UserController::class, 'update'])->name('user.update');

// Menghapus user berdasarkan id
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
