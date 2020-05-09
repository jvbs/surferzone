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
    Route::get('/home', 'Admin\HomeController@index')->name('admin.home');
    Route::prefix('produtos')->group(function(){
        Route::get('/', 'Admin\ProdutosController@show')->name('admin.products.show');
        Route::get('/novo', 'Admin\ProdutosController@create')->name('admin.products.create');
        Route::post('/novo', 'Admin\ProdutosController@store')->name('admin.products.store');

        Route::get('/editar/{id_produto}', 'Admin\ProdutosController@edit')->name('admin.products.edit');

    });
});
