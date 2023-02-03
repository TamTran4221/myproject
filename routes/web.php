<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('add-category', [CategoryController::class, 'add'])->name('category.add');
Route::post('add-category', [CategoryController::class, 'create']);

Route::get('product', [ProductController::class, 'index'])->name('product.index');
Route::get('add-product', [ProductController::class, 'add'])->name('product.add');
Route::post('add-product', [ProductController::class, 'create']);

Route::post('upload', [CategoryController::class, 'upload']);
Route::get('edit-product/{id}', [StudentController::class, 'update'])->name('product.update');
Route::post('edit-product/{id}', [StudentController::class, 'edit']);