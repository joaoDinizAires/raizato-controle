<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::prefix('')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('/register', [AuthController::class, 'create'])->name('show');
    Route::post('/register', [AuthController::class, 'store'])->name('store');
    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout')->middleware('auth');
});

Route::prefix('product')->middleware('auth')->group(function () {
    Route::get('/create', [ProductController::class, 'create'])->name('product.create')->middleware('isManager');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store')->middleware('isManager');
    Route::post('/search', [ProductController::class, 'search'])->name('product.search');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('product.edit')->middleware('isManager');
    Route::put('/{id}', [ProductController::class, 'update'])->name('product.update')->middleware('isManager');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('product.delete')->middleware('isManager');
});

Route::prefix('supplier')->middleware('auth')->group(function () {
    Route::get('/create', [SupplierController::class, 'create'])->name('supplier.create')->middleware('isManager');
    Route::post('/store', [SupplierController::class, 'store'])->name('supplier.store')->middleware('isManager');
    Route::get('/list', [SupplierController::class, 'show'])->name('supplier.index');
    Route::get('/{id}/edit', [SupplierController::class, 'edit'])->name('supplier.edit')->middleware('isManager');
    Route::delete('/{id}', [SupplierController::class, 'destroy'])->name('supplier.delete')->middleware('isManager');
    Route::put('/{id}', [SupplierController::class, 'update'])->name('supplier.update')->middleware('isManager');
});

Route::prefix('users')->middleware('auth')->group(function () {
    Route::get('/', [UserController::class, 'show'])->name('user.show')->middleware('isAdmin');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('user.destroy')->middleware('isAdmin');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit')->middleware('isAdmin');
    Route::put('/{id}', [UserController::class, 'update'])->name('user.update')->middleware('isAdmin');
});

