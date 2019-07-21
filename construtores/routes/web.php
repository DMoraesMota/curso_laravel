<?php

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

// O /getNome direciona para a rota MeuControlador e chama o metodo getNome
Route::get('/getNome', 'MeuControlador@getNome');

Route::get('/getIdade', 'MeuControlador@getIdade');

// Chamando um controlador e passando parametros
Route::get('/multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');
 
// Chamando um controlador e passando parametros para buscar uma informação
Route::get('/getNomeId/{id}', 'MeuControlador@getNomeById');

//Criando a rota com resource, o laravel já cria todas as requisões HTTP para cada função
//necessária do meu controlador, exemplo:
//editar, deletar, listar, etc
Route::resource('/cliente','ClienteControlador');

Route::post('/cliente/requisitar', 'ClienteControlador@requisitar');