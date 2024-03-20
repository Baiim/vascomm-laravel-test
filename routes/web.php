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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

// User Section
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user')->middleware('admin');;
Route::get('/user/add', [App\Http\Controllers\UserController::class, 'create'])->name('user.create')->middleware('admin');;
Route::post('/user/add/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store')->middleware('admin');;
Route::delete('/user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete')->middleware('admin');;
// Product Section
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product')->middleware('admin');;
Route::get('/product/add', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create')->middleware('admin');;
Route::post('/product/add/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store')->middleware('admin');;
Route::delete('/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('product.delete')->middleware('admin');;


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('admin');;
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('keluar');
