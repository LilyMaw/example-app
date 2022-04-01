<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name("home.index");
Route::get('/about', [HomeController::class,'about'])->name("home.about");

Route::get('/products', [ProductController::class,'index'])->name("product.index");
Route::get('/products/{id}', [ProductController::class,'show'])->name("product.show");

Route::get('/cart', [CartController::class,'index'])->name("cart.index");
Route::get('/cart/delete', [CartController::class,'delete'])->name("cart.delete");
Route::post('/cart/add/{id}', [CartController::class,'add'])->name("cart.add");

Route::middleware('admin')->group(function () {
Route::get('/admin', [AdminController::class, 'index'])->name("admin.home.index");
Route::get('/admin/products', [AdminProductController::class, 'index'])->name("admin.product.index");
Route::post('/admin/products/store', [AdminProductController::class, 'store'])->name("admin.product.store");
Route::get('/admin/products/{id}/edit', [AdminProductController::class, 'edit'])->name("admin.product.edit");
Route::put('/admin/products/{id}/update', [AdminProductController::class, 'update'])->name("admin.product.update");
Route::delete('/admin/products/{id}/delete', [AdminProductController::class, 'delete'])->name("admin.product.delete");
});


Auth::routes();
