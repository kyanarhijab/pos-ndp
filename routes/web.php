<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', [App\Http\Controllers\AuthController::class, 'index']);
Route::get('login', [AuthController::class,'index'])->name('login');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::post('logout', [AuthController::class,'logout'])->name('logout');
Route::group(['middleware' => ['cek_login']], function () {
    Route::get('home', [HomeController::class,'index'])->name('home');
    Route::prefix('utility')->group(function () {
        Route::resource('/user', App\Http\Controllers\utility\UserController::class, ['except' => ['show'] ,'as' => 'utility']);
    });
});
/*
Route::get('/', function () {
    return view('welcome');
});
*/
