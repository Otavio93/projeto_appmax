<?php

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


Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [App\Http\Controllers\ProductModelController::class, 'index'])->name('products');
    Route::get('/products', [App\Http\Controllers\ProductController::class, 'show'])->name('products-show');

    Route::post('/create', [App\Http\Controllers\ProductController::class, 'create'])->name('create-sku');
    Route::post('/create-product', [App\Http\Controllers\ProductModelController::class, 'create'])->name('create-product');
});
