<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/insert', function () {return view('insert');})->name('insert');
Route::get('/update', function () {return view('update');})->name('update');
Route::get('/delete', function () {return view('delete');})->name('delete');
Route::get('/products',  [ProductController::class,'show'])->name('product.show');
Route::post('/product-insert', [ProductController::class,'insert'])->name('product.insert');
Route::post('/product-update', [ProductController::class,'update'])->name('product.update');
Route::post('/product-delete', [ProductController::class,'delete'])->name('product.delete');
Route::post('/product-filter', [ProductController::class,'filter'])->name('product.filter');
