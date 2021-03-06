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


Route::get('/', 'HomeController@index')->name('index');
Route::get('/produtos', 'HomeController@show')->name('show');

Route::get('/produtos/{category}/categoria', 'HomeController@searchByCategory')->name('show.search.category');
Route::get('/produtos/{brand}/marca', 'HomeController@searchByBrand')->name('show.search.brand');

Route::post('/assinar-newsletter', 'HomeController@assignNewsletter')->name('assign.newsletter');

Route::get('/produtos/{product}/detalhe', 'HomeController@viewProduct')->name('show.product.detail');

Route::get('/meu-carrinho', 'CartsController@show')->name('cart.show');
Route::post('/{product}/adicionar-ao-carrinho', 'CartsController@store')->name('cart.store');
Route::delete('/{product}/remover-carrinho', 'CartsController@destroy')->name('cart.destroy');


// Route::get('/checkout', function () {
//     return view('billing');
// });

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

    Route::prefix('marcas')->group(function(){
        Route::get('/', 'Admin\BrandsController@show')->name('admin.brands.show');
        Route::get('/novo', 'Admin\BrandsController@create')->name('admin.brands.create');
        Route::post('/novo', 'Admin\BrandsController@store')->name('admin.brands.store');

        Route::get('{brands}/editar', 'Admin\BrandsController@edit')->name('admin.brands.edit');
        Route::put('{brands}/editar', 'Admin\BrandsController@update')->name('admin.brands.update');

        Route::delete('{brands}', 'Admin\BrandsController@destroy')->name('admin.brands.destroy');
    });

    Route::prefix('produtos')->group(function(){
        Route::get('/', 'Admin\ProductsController@show')->name('admin.products.show');
        Route::get('/novo', 'Admin\ProductsController@create')->name('admin.products.create');
        Route::post('/novo', 'Admin\ProductsController@store')->name('admin.products.store');

        Route::get('{produto}/editar', 'Admin\ProductsController@edit')->name('admin.products.edit');
        Route::put('{produto}/editar', 'Admin\ProductsController@update')->name('admin.products.update');

        Route::delete('{produto}', 'Admin\ProductsController@destroy')->name('admin.products.destroy');
    });

    Route::prefix('meus-pedidos')->group(function(){
        Route::get('/', 'Admin\OrdersController@show')->name('admin.orders.show');
        Route::post('/novo', 'Admin\OrdersController@store')->name('admin.orders.store');
        // Route::get('/novo', 'Admin\ProductsController@create')->name('admin.products.create');

        // Route::get('{produto}/editar', 'Admin\ProductsController@edit')->name('admin.products.edit');
        // Route::put('{produto}/editar', 'Admin\ProductsController@update')->name('admin.products.update');

        // Route::delete('{produto}', 'Admin\ProductsController@destroy')->name('admin.products.destroy');
    });
});
