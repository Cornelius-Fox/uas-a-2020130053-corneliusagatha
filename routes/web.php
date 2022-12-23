<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('menus', MenuController::class);
Route::resource('orders', OrderController::class);
Route::prefix('/createOrder')->group(function () {
    Route::get('/attach', [OrderController::class, 'attach']);
    Route::get('/tampil', [OrderController::class, 'tampil']);
    Route::get('/detach', [OrderController::class, 'detach']);
    Route::get('/sync', [OrderController::class, 'sync']);
    Route::get('/pivot', [OrderController::class, 'pivot']);
   });
   Kita
