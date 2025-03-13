<?php

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
use App\Http\Controllers\CategoryController; // Tambahkan ini

// Routing untuk Query Builder (Praktikum 5)
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/add', [CategoryController::class, 'add']);
Route::get('/category/update', [CategoryController::class, 'update']);
Route::get('/category/delete', [CategoryController::class, 'delete']);
