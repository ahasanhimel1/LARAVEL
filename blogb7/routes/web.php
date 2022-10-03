<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoyControllerer;
use App\Http\Controllers\BlogController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category-blog', [HomeController::class, 'category'])->name('category-blog');
Route::get('/blog-detail', [HomeController::class, 'detail'])->name('blog-detail');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category/add', [CategoyControllerer::class, 'index'])->name('category.add');
    Route::post('/category/new', [CategoyControllerer::class, 'create'])->name('category.new');
    Route::get('/category/manage', [CategoyControllerer::class, 'manage'])->name('category.manage');
    Route::get('/category/edit/{id}', [CategoyControllerer::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoyControllerer::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoyControllerer::class, 'delete'])->name('category.delete');


    Route::get('/blog/add', [BlogController::class, 'index'])->name('blog.add');
    Route::post('/blog/new', [BlogController::class, 'create'])->name('blog.new');
    Route::get('/blog/manage', [BlogController::class, 'manage'])->name('blog.manage');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::get('/blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');
});
