<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->middleware('auth');
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login', [AuthController::class,'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class,'create'])->name('show');
Route::post('/register', [AuthController::class,'store'])->name('store');
Route::post('/logout', [AuthController::class,'destroy'])->name('logout');

