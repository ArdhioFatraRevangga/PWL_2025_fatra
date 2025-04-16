<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\WelcomeController;
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
// Route::get("/", [WelcomeController::class,"index"]);

// Route::get('/level', [LevelController::class,'index']);
// Route::get('/user/with-level', [UserController::class, 'index_with_level']);
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class,'index']);
// Route::get('/user/test', [UserController::class, 'index']);
// Route::get('/user/tambah', [UserController::class,'tambah'])->name('user.tambah');
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('user.ubah');
// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('user.ubah_simpan');
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('user.hapus');
// Route::get('/user', [UserController::class, 'index'])->name('user.index');
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user.tambah_simpan');
// Route::get('/kategori/add', [KategoriController::class, 'add']);
// Route::get('/kategori/update', [KategoriController::class, 'update']);
// Route::get('/kategori/delete', [KategoriController::class, 'delete']);

// Route:: get ('/', [WelcomeController :: class,'index' ]);

Route::group(['prefix'=>'user'], function(){
    
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::get ('/create_ajax', [UserController:: class, 'create_ajax' ]);// Menampilkan halaman form tambah user Ajax
    Route::post('/ajax', [UserController:: class, 'store_ajax' ]);    // Menyimpan data user baru Ajax
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::get('/{id}/edit_ajax', [UserController::class,'edit_ajax']); //Menampilkan Halaman form Edit User AJAX
    Route::put('/{id}/update_ajax', [UserController::class,'update_ajax']); //Menyimpan perubahan data User AJAX
    Route::get('/{id}/delete_ajax',[UserController::class,'confirm_ajax']);
    Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});
