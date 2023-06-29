<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Leer */ 
Route::get('product/show/{id}', 'App\Http\Controllers\ProductController@show')->name('product/detail'); 

/* Vista todos los productos */
Route::get('products', 'App\Http\Controllers\ProductController@index')->name('products'); 
