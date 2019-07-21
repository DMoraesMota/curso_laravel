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
    return view('pagina');
});

Route::get('/primeiraView', function() {
    return view('minhaView');
});

//Passagem de parametro para a view de forma manual
Route::get('/ola', function(){
    return view('minhaView')
        ->with('nome','Diego')
        ->with('sobrenome','Mota');
});

//Passagem de parametro para view de forma dinamica
// FORMA 1
Route::get('/olaNovo1/{nome}/{sobrenome}', function($nome, $sobrenome){
    return view('minhaView')
        ->with('nome',$nome)
        ->with('sobrenome',$sobrenome);;
});

//Passagem de parametro para view de forma dinamica
// FORMA 2
Route::get('/olaNovo2/{nome}/{sobrenome}', function($nome, $sobrenome){
    $param = ['nome'=>$nome, 'sobrenome'=> $sobrenome];
    return view('minhaView', $param);
});

//Passagem de parametro para view de forma dinamica
// FORMA 3
// A função compact ela faz um array associativo automaticamente
Route::get('/olaNovo3/{nome}/{sobrenome}', function($nome, $sobrenome){    
    return view('minhaView', compact('nome','sobrenome'));
});

Route::get('/email/{email}', function ($email){
    
    if (View::exists('email'))
        return view('email',compact('email')); 
    else
        return view('error');
});

Route::get('/produtos','ProdutoControlador@listar');

Route::get('/secaoprodutos/{palavra}','ProdutoControlador@secaoprodutos');

Route::get('/mostraropcoes', 'ProdutoControlador@mostrar_opcoes');

Route::get('/opcoes/{opcao}', 'ProdutoControlador@opcoes');

Route::get('/loop/for/{n}', 'ProdutoControlador@loopFor');

Route::get('/loop/foreach', 'ProdutoControlador@loopForeach');
