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
    Route::get('/home', 'Admin\AppController@index')->name('admin.home');

    Route::prefix('categorias')->group(function(){
        Route::get('/', 'Admin\CategoriesController@show')->name('admin.categories.show');
        Route::get('/novo', 'Admin\CategoriesController@create')->name('admin.categories.create');
        Route::post('/novo', 'Admin\CategoriesController@store')->name('admin.categories.store');

        Route::get('{category}/editar', 'Admin\CategoriesController@edit')->name('admin.categories.edit');
        Route::put('{category}/editar', 'Admin\CategoriesController@update')->name('admin.categories.update');

        Route::delete('{category}', 'Admin\CategoriesController@destroy')->name('admin.categories.destroy');
    });

    Route::prefix('produtos')->group(function(){
        Route::get('/', 'Admin\ProductsController@show')->name('admin.products.show');
        Route::get('/novo', 'Admin\ProductsController@create')->name('admin.products.create');
        Route::post('/novo', 'Admin\ProductsController@store')->name('admin.products.store');

        Route::get('{produto}/editar', 'Admin\ProductsController@edit')->name('admin.products.edit');
        Route::put('{produto}/editar', 'Admin\ProductsController@update')->name('admin.products.update');

        Route::delete('{produto}', 'Admin\ProductsController@destroy')->name('admin.products.destroy');
    });
});
