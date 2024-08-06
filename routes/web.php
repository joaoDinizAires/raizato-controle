<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login', [AuthController::class,'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class,'create'])->name('show');
Route::post('/register', [AuthController::class,'store'])->name('store');
Route::post('/logout', [AuthController::class,'destroy'])->name('logout');

Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/store', [ProductController::class,'store'])->name('product.store');

// Rotas para fornecedores
Route::get('/supplier/create', [SupplierController::class, 'create'])->name('supplier.create');
Route::post('/supplier/store', [SupplierController::class, 'store'])->name('supplier.store');
Route::get('/suppliers', [SupplierController::class, 'show'])->name('supplier.index');
Route::get('/suppliers/{id}/edit', [SupplierController::class, 'edit'])->name('supplier.edit');
Route::put('/suppliers/{id}', [SupplierController::class, 'update'])->name('supplier.update');

