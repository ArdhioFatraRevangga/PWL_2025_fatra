<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
// use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\levelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\m_barangController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PenjualanDetailController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\AuthController;
use App\Models\BarangModel;

// use App\Http\Controllers\UserCont;
// use App

/*
|-----------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/hello', [WelcomeController::class, 'hello']);

// Route::get('mahasiswa', function ($id) {});
// Route::post('mahasiswa', function ($id) {});
// Route::put('mahasiswa', function ($id) {});
// Route::delete('mahasiswa', function ($id) {});
// Route::get('mahasiswa/{id}', function ($id) {});
// Route::put('mahasiswa/{id}', function ($id) {});
// Route::delete('mahasiswa/{id}', function ($id) {});


// Route::get('/hello', function () {
//     return 'Hello World';
// });
// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/', function () {
//     return 'Welcome RAHMAN THE QONQUIROR';
// });

// Route::get('/about', function () {
//     return 'SAFRIZAL RAHMAN THE QONQUIROR | 2341760151';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'My name is ' . $name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
// });


// Route::get('/articles/{id}', function ($articlesId) {
//     return 'Artikel ke-' . $articlesId;
// });

// Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile');


// Route::get('/user/{name?}', function ($name = null) {
//     return 'My name is ' . $name;
// });

// Route::get('/user/{name?}', function ($name = 'John') {
//     return 'Nama saya- ' . $name;
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya- ' . $name;
// })->where('name', '^(?!profile$).*');


// // Route::get('/user/profile', function () {
// //     //
// // })->name('profile');

// // Route::get(
// //     '/user/profile',
// //     [UserProfileController::class, 'show']
// // )->name('profile');

// // // Generating URLs...
// // $url = route('profile');

// // // Generating Redirects...
// // return redirect()->route('profile');

// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });
//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });
// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });
// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });


// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// Route::redirect('/here', '/there');

// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);


// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);


// Route::get('/', HomeController::class);
// Route::get('/about', AboutController::class);
// Route::get('/articles/{id}', ArticleController::class);

// Route::resource('photos', PhotoController::class);

// Route::resource('photos', PhotoController::class)->only([
//     'index',
//     'show'
// ]);
// Route::resource('photos', PhotoController::class)->except([
//     'create',
//     'store',
//     'update',
//     'destroy'
// ]);


// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'SAFRIZAL RAHMAN THE qonwueror']);
// });

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'SAFRIZAL RAHMAN THE qonwueror']);
// });

// Route::get('/greeting', [WelcomeController::class,
// 'greeting']);

// PWLPOS

// Route::get ('/level', [LevelController::class, 'index' ]) ;
// Route :: get ('/level', [LevelController::class, 'index' ]);
// Route :: get ('/kategori', action: [KategoriController :: class, 'index' ]);
// // Route :: get ('/public/user', [UserController::class, 'index' ]);
// // Route :: get ('/user', [UserController::class, 'index' ]);
// Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user.tambah');
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user.tambah_simpan');
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('user.ubah');
// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('user.ubah_simpan');
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('user.hapus');


// // JOBSHIT 5
// Route:: get ('/', [WelcomeController :: class,'index' ]);


// Route::group(['prefix'=>'user'], function(){
//     Route::get('/', [UserController::class, 'index']);
//     Route::post('/list', [UserController::class, 'list']);
//     Route::get('/create', [UserController::class, 'create']);
//     Route::post('/', [UserController::class, 'store']);
//     Route::get('/{id}', [UserController::class, 'show']);
//     Route::get('/{id}/edit', [UserController::class, 'edit']);
//     Route::put('/{id}', [UserController::class, 'update']);
//     Route::delete('/{id}', [UserController::class, 'destroy']);
// });

//JS 7
Route::pattern('id', '[0-9]+'); // artinya ketika ada parameter {id}, maka harus berupa angka

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () { // artinya semua route di dalam group ini harus login dulu


    Route::get('/', [WelcomeController::class, 'index']);

    Route::middleware(['authorize: ADM, MNG'])->group(function () {
        Route::get('/barang', [BarangController::class, 'index']);
        Route::post('/barang/list', [BarangController::class, 'list']);
        Route::get('/barang/create_ajax', [BarangController::class, 'create_ajax']); // ajax form create
        Route::post('/barang_ajax', [BarangController::class, 'store_ajax']); // ajax store
        Route::get('/barang/{id}/edit_ajax', [BarangController::class, 'edit_ajax']); // ajax form edit
        Route::put('/barang/{id}/update_ajax', [BarangController::class, 'update_ajax']); // ajax update
        Route::get('/barang/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']); // ajax form confirm
        Route::delete('/barang/{id}/delete_ajax', [BarangController::class, 'delete_ajax']); // ajax delete
    });

    //JS 6
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'index']);
        Route::post('/list', [UserController::class, 'list']);
        Route::get('/create', [UserController::class, 'create']);
        Route::post('/', [UserController::class, 'store']);
        Route::get('/create_ajax', [UserController::class, 'create_ajax']);
        Route::post('/ajax', [UserController::class, 'store_ajax']);
        Route::get('/{id}', [UserController::class, 'show']);
        Route::get('/{id}/edit', [UserController::class, 'edit']);
        Route::put('/{id}', [UserController::class, 'update']);
        Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']);
        Route::get('/{id}/show_ajax', [UserController::class, 'show_ajax']);
        Route::delete('/{id}', [UserController::class, 'destroy']);
    });

    //Route m_level
    Route::group(['prefix' => 'level'], function () {
        Route::get('/', [levelController::class, 'index']);
        Route::post('/list', [levelController::class, 'list']);
        Route::get('/create', [levelController::class, 'create']);
        Route::post('/', [levelController::class, 'store']);
        Route::get('/create_ajax', [levelController::class, 'create_ajax']);// Menampilkan halaman form tambah user Ajax
        Route::post('/ajax', [levelController::class, 'store_ajax']);    // Menyimpan data user baru Ajax
        Route::get('/{id}', [levelController::class, 'show']);
        Route::get('/{id}/edit', [levelController::class, 'edit']);
        Route::put('/{id}', [levelController::class, 'update']);
        Route::get('/{id}/edit_ajax', [levelController::class, 'edit_ajax']); //Menampilkan Halaman form Edit User AJAX
        Route::put('/{id}/update_ajax', [levelController::class, 'update_ajax']); //Menyimpan perubahan data User AJAX
        Route::get('/{id}/delete_ajax', [levelController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [levelController::class, 'delete_ajax']);
        Route::delete('/{id}', [levelController::class, 'destroy']);
    });

    //Route m_kategori
    Route::group(['prefix' => 'kategori'], function () {
        Route::get('/', [KategoriController::class, 'index']);
        Route::post('/list', [KategoriController::class, 'list']);
        Route::get('/create', [KategoriController::class, 'create']);
        Route::post('/', [KategoriController::class, 'store']);
        Route::get('/create_ajax', [KategoriController::class, 'create_ajax']);// Menampilkan halaman form tambah user Ajax
        Route::post('/ajax', [KategoriController::class, 'store_ajax']);    // Menyimpan data user baru Ajax
        Route::get('/{id}', [KategoriController::class, 'show']);
        Route::get('/{id}/edit', [KategoriController::class, 'edit']);
        Route::put('/{id}', [KategoriController::class, 'update']);
        Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']); //Menampilkan Halaman form Edit User AJAX
        Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']); //Menyimpan perubahan data User AJAX
        Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
        Route::delete('/{id}', [KategoriController::class, 'destroy']);
    });

    //m_barang
    Route::group(['prefix' => 'barang'], function () {
        Route::get('/', [BarangController::class, 'index']);
        Route::post('/list', [BarangController::class, 'list']);
        Route::get('/create', [BarangController::class, 'create']);
        Route::post('/', [BarangController::class, 'store']);
        Route::get('/create_ajax', [BarangController::class, 'create_ajax']);// Menampilkan halaman form tambah user Ajax
        Route::post('/ajax', [BarangController::class, 'store_ajax']);    // Menyimpan data user baru Ajax
        Route::get('/{id}', [BarangController::class, 'show']);
        Route::get('/{id}/edit', [BarangController::class, 'edit']);
        Route::put('/{id}', [BarangController::class, 'update']);
        Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']); //Menampilkan Halaman form Edit User AJAX
        Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']); //Menyimpan perubahan data User AJAX
        Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
        Route::delete('/{id}', [BarangController::class, 'destroy']);
    });

    // Stok Routes
    Route::group(['prefix' => 'stok'], function () {
        Route::get('/', [StokController::class, 'index']);
        Route::post('/list', [StokController::class, 'list']);
        Route::get('/create', [StokController::class, 'create']);
        Route::post('/', [StokController::class, 'store']);
        Route::get('/create_ajax', [StokController::class, 'create_ajax']);
        Route::get('/stok/create_ajax', [StokController::class, 'create_ajax'])->name('stok.create_ajax');
        Route::post('/ajax', [StokController::class, 'store_ajax']);
        Route::get('/{id}', [StokController::class, 'show']);
        Route::get('/{id}/show', [StokController::class, 'show'])->name('stok.show');
        Route::get('/{id}/edit', [StokController::class, 'edit']);
        Route::put('/{id}', [StokController::class, 'update']);
        Route::get('/{id}/edit_ajax', [StokController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [StokController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [StokController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [StokController::class, 'delete_ajax']);
        Route::get('/{id}/show_ajax', [StokController::class, 'show_ajax']);
        Route::delete('/{id}', [StokController::class, 'destroy']);
    });

    Route::group(['prefix' => 'penjualan'], function () {
        Route::get('/', [PenjualanController::class, 'index']);
        Route::post('/list', [PenjualanController::class, 'list']);
        Route::get('/create', [PenjualanController::class, 'create']);
        Route::post('/', [PenjualanController::class, 'store']);
        Route::get('/create_ajax', [PenjualanController::class, 'create_ajax']);
        Route::get('/penjualan/create_ajax', [PenjualanController::class, 'create_ajax'])->name('penjualan.create_ajax');
        Route::post('/ajax', [PenjualanController::class, 'store_ajax']);
        Route::get('/{id}', [PenjualanController::class, 'show']);
        Route::get('/{id}/show', [PenjualanController::class, 'show'])->name('penjualan.show');
        Route::get('/{id}/edit', [PenjualanController::class, 'edit']);
        Route::put('/{id}', [PenjualanController::class, 'update']);
        Route::get('/{id}/edit_ajax', [PenjualanController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [PenjualanController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [PenjualanController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [PenjualanController::class, 'delete_ajax']);
        Route::get('/{id}/show_ajax', [PenjualanController::class, 'show_ajax']);
        Route::delete('/{id}', [PenjualanController::class, 'destroy']);
    });

    // Penjualan Detail Routes
    Route::group(['prefix' => 'penjualan-detail'], function () {
        Route::get('/', [PenjualanDetailController::class, 'index']);
        Route::post('/list', [PenjualanDetailController::class, 'list']);
        Route::get('/create', [PenjualanDetailController::class, 'create']);
        Route::post('/', [PenjualanDetailController::class, 'store']);
        Route::get('/create_ajax', [PenjualanDetailController::class, 'create_ajax']);
        Route::post('/ajax', [PenjualanDetailController::class, 'store_ajax']);
        Route::get('/{id}', [PenjualanDetailController::class, 'show']);
        Route::get('/{id}/edit', [PenjualanDetailController::class, 'edit']);
        Route::put('/{id}', [PenjualanDetailController::class, 'update']);
        Route::get('/{id}/edit_ajax', [PenjualanDetailController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [PenjualanDetailController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [PenjualanDetailController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [PenjualanDetailController::class, 'delete_ajax']);
        Route::delete('/{id}', [PenjualanDetailController::class, 'destroy']);
        Route::post('/penjualan-detail/store_ajax', [PenjualanDetailController::class, 'store_ajax']);
        Route::get('/{id}/show_ajax', [PenjualanDetailController::class, 'show_ajax']);

        // Route::post('t_penjualan_detail/list', [PenjualanDetailController::class, 'list']);
        Route::get('/penjualan-detail', [PenjualanDetailController::class, 'index'])->name('penjualan-detail.index');
        Route::get('/penjualan-detail/create', [PenjualanDetailController::class, 'create'])->name('penjualan-detail.create');
        Route::post('/penjualan-detail', [PenjualanDetailController::class, 'store'])->name('penjualan-detail.store'); // <-- ini penting
        Route::get('/penjualan-detail', [PenjualanDetailController::class, 'index'])->name('penjualan-detail.index');

    });


    // masukkan semua route yang perlu autentikasi di sini
});

//artinya semua route di dalam group ini harus punya role ADM (Administrator) dan MNG (Manager)


//JS 8
Route::get('/barang', [BarangController::class, 'index']);
Route::post('/barang/list', [BarangController::class, 'list']);
Route::get('/barang/create_ajax', [BarangController::class, 'create_ajax']); // ajax form create
Route::post('/barang_ajax', [BarangController::class, 'store_ajax']); // ajax store
Route::get('/barang/{id}/edit_ajax', [BarangController::class, 'edit_ajax']); // ajax form edit
Route::put('/barang/{id}/update_ajax', [BarangController::class, 'update_ajax']); // ajax update
Route::get('/barang/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']); // ajax form confirm
Route::delete('/barang/{id}/delete_ajax', [BarangController::class, 'delete_ajax']); // ajax delete

Route::get('/barang/import', [BarangController::class, 'import']); // ajax form upload excel
Route::post('/barang/import_ajax', [BarangController::class, 'import_ajax']); // ajax import excel
Route::get('/barang/export_excel', [BarangController::class, 'export_excel']); // export excel
Route::get('/barang/export_pdf', [BarangController::class, 'export_pdf']); // export excel  

Route::get('/profile', [UserController::class, 'profile']);
Route::post('/profile/update-picture', [UserController::class, 'updateProfilePicture']);
// // User routes group
// Route::group(['prefix' => 'user'], function () {
//     // Menampilkan halaman awal user
//     Route::get('/', [UserController::class, 'index']);

//     // Menampilkan data user dalam bentuk JSON untuk datatables
//     Route::post('/list', [UserController::class, 'list']);

//     // Menampilkan halaman form tambah user
//     Route::get('/create', [UserController::class, 'create']);

//     // Menyimpan data user baru
//     Route::post('/', [UserController::class, 'store']);

//     // Menampilkan detail user
//     Route::get('/{id}', [UserController::class, 'show']);

//     // Menampilkan halaman form edit user
//     Route::get('/{id}/edit', [UserController::class, 'edit']);

//     // Menyimpan perubahan data user
//     Route::put('/{id}', [UserController::class, 'update']);

//     // Menghapus data user
//     Route::delete('/{id}', [UserController::class, 'destroy']);

//     // Route::post('/user/list', [UserController::class, 'list'])->name('user.list');
// });