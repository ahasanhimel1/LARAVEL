<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/add-product',[ProductController::class, 'add'])->name('product.add');
Route::post('/new-product',[ProductController::class, 'create'])->name('product.new');
Route::get('/manage-product',[ProductController::class, 'manage'])->name('product.manage');
Route::get('/edit-product/{id}',[ProductController::class, 'edit'])->name('product.edit');
Route::post('/update-product/{id}', [ProductController::class,'update'])->name('product.update');
Route::get('/delete-product/{id}',[ProductController::class, 'delete'])->name('product.delete');
