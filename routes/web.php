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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/index', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
Route::get('/edit', [App\Http\Controllers\SaleController::class, 'sale'])->name('sale');
Route::get('/show', [App\Http\Controllers\CompanyController::class, 'company'])->name('company');