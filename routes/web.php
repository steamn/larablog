<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Blog;
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



Route::prefix('admin')->group(function () {

    Route::get('/', [MainController::class, 'index'])->name('main');

    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
});



Auth::routes();

