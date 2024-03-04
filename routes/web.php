<?php
use App\Http\Controllers\levelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/level', [levelController::class, 'index']);