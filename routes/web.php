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

Route::get('/produtos', function () {
    return view('products');
});


Route::get('/visualizar-produto', function () {
    return view('detail');
});

Route::get('/meu-carrinho', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('billing');
});

Auth::routes();


Route::prefix('admin')->group(function(){
    Route::get('/home', 'HomeController@index')->name('admin.home');
});
