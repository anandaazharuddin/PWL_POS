<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\m_kategoriController;
use App\Http\Controllers\m_userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\m_levelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\m_barangController;
use App\Http\Controllers\t_stokController;
use App\Http\Controllers\TransaksiPenjualanController;
use App\Http\Controllers\FileUploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [WelcomeController::class, 'index']);

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [userController::class, 'list']);
    Route::get('/create', [userController::class, 'create']);
    Route::post('/', [userController::class, 'store']);
    Route::get('/{id}', [userController::class, 'show']);
    Route::get('/{id}/edit', [userController::class, 'edit']);
    Route::put('/{id}', [userController::class, 'update']);
    Route::delete('/{id}', [userController::class, 'destroy']);
});

Route::resource('level', LevelController::class);
Route::post('level/list', [levelController::class, 'list']);

Route::resource('kategori', KategoriController::class);
Route::post('kategori/list', [kategoriController::class, 'list']);

Route::resource('barang', BarangController::class);
Route::post('barang/list', [barangController::class, 'list']);

Route::resource('stok', stockcontroller::class);
Route::post('stok/list', [stokController::class, 'list']);

Route::resource('penjualan', TransaksiPenjualanController::class);
Route::post('penjualan/list', [TransaksiPenjualanController::class, 'list']);

/**
 * Routes for User Authentication process
 */
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

/**
 * use Authentication class using middleware aliases in http/kernel
 * to redirect users when they are not authenticate
 */
Route::group(['middleware' => ['auth']], function () {

    /**
     * if user is admin
     */
    Route::group(['middleware' => ['cek_login:1']], function () {
        Route::resource('admin', AdminController::class);
    });
    /**
     * if user is manager
     */
    Route::group(['middleware' => ['cek_login:2']], function () {
        Route::resource('manager', ManagerController::class);
    });
});


Route::get('/file-upload', [FileUploadController::class,'fileUpload']);
Route::post('/file-upload', [FileUploadController::class,'prosesFileUpload']);