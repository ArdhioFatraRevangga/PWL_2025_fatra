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
use App\Http\Controllers\LevelController; // Tambahkan ini

// Routing untuk Praktikum 4: DB Facade Implementation
Route::get('/level', [LevelController::class, 'index']);
Route::get('/level/add', [LevelController::class, 'add']);
Route::get('/level/update', [LevelController::class, 'update']);
Route::get('/level/delete', [LevelController::class, 'delete']);

