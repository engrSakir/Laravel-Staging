<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
*/

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('product', [ProductController::class, 'index'])->middleware(['auth'])->name('product.index');
Route::get('product-export', [ProductController::class, 'export'])->middleware(['auth'])->name('product.export');
Route::post('product-import', [ProductController::class, 'import'])->middleware(['auth'])->name('product.import');
