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