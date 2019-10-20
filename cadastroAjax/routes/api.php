<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categorias', 'ControladorCategoria@indexJson');

Route::get('/produtos', 'ControladorProduto@index');

Route::post('/produtos', 'ControladorProduto@store')->name('api.produto.store');;

Route::Delete('/produtos/{id}', 'ControladorProduto@destroy')->name('api.produto.destroy');

Route::get('/produtos/{id}', 'ControladorProduto@show')->name('api.produto.show');

Route::put('/produtos/{id}', 'ControladorProduto@update')->name('api.produto.put');

