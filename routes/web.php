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

Route::get('/', [\App\Http\Controllers\Start::class, 'view']);
Route::get('/about', [\App\Http\Controllers\About::class, 'view']);
Route::get('/login', [\App\Http\Controllers\Login::class, 'view']);
Route::post('/login', [\App\Http\Controllers\Login::class, 'login']);
Route::get('/registration', [\App\Http\Controllers\Registration::class, 'view']);
Route::get('/info', [\App\Http\Controllers\Info::class, 'view']);
Route::get('/catalog', [\App\Http\Controllers\Catalog::class, 'view']);
Route::get('/cart', [\App\Http\Controllers\Cart::class, 'view']);
Route::get('/logout', [\App\Http\Controllers\Logout::class, 'logout']);
Route::get('/product/{id}', [\App\Http\Controllers\Product::class, 'view']);
