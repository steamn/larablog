<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminMainController;

use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminTagController;
use App\Http\Controllers\Blog\CategoryController;
use App\Http\Controllers\Blog\PostController;
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


Route::group(['namespace' => 'App\Http\Controllers\Blog'], function () {
    Route::get('/', 'IndexController')->name('home');
});

Route::resource('cat', CategoryController::class);
Route::resource('post', PostController::class);


Route::prefix('admin')->group(function () {

    Route::get('/', [AdminMainController::class, 'index'])->name('main');

    Route::resource('category', AdminCategoryController::class);
    Route::resource('post', AdminPostController::class);
    Route::resource('tag', AdminTagController::class);
});


Auth::routes();

