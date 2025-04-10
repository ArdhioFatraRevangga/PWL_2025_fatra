<?php

use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|+
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\KategoriController; 
use App\Http\Controllers\UserController; // Tambahkan ini

// Routing untuk Query Builder (Praktikum 5)
Route::get('/level', [LevelController::class,'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class,'index']);
Route::get('/user/test', [UserController::class, 'index']);
Route::get('/kategori/add', [KategoriController::class, 'add']);
Route::get('/kategori/update', [KategoriController::class, 'update']);
Route::get('/kategori/delete', [KategoriController::class, 'delete']);
