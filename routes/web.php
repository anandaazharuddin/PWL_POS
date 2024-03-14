<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});

//level index
Route::get('/level', [LevelController::class, 'index']);

//kategori
Route::get('/kategori', [KategoriController::class, 'index']);

//user Con
Route::get('/user',[UserController::class,'index'] );

Route::get('/user/tambah',[UserController::class,'tambah'] )->name('/user/tambah');
Route::get('/user/ubah/{id}',[UserController::class,'ubah'])->name('/user/ubah');
Route::get('/user/hapus/{id}',[UserController::class,'hapus'])->name ('/user/hapus');
Route::get('/user',[UserController::class,'index'])->name ('/user');
Route::post('/user/tambah_simpan',[UserController::class,'tambah_simpan'])->name ('/user/tambah_simpan');