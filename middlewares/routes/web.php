<?php

Use App\Http\Middleware\PrimeiroMiddleware;

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

//O middleware intercepta a requisão antes mesmo dela chegar no controlador
Route::get('/usuarios', 'UsuarioControlador@index');

Route::get('/terceiro', function(){
    return 'Passou pelo terceiro Middleware';
})->middleware('terceiro:joao,20');
