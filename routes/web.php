<?php

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
    Route::get('/', 'IndexController');
});

//Route::get('/', function () {
//    return view('welcome');
//});



Auth::routes();

