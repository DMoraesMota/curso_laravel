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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Direcionando para o controlador MeuControlador e chamando os diversos metodos.
// Conforme abaixo:
Route::get('produtos', function(){
    return view('outras.produtos');    
})->name('produtos');

Route::get('departamentos', function(){
    return view('outras.departamentos');    
})->name('departamentos');

Route::get('nome', 'MeuControlador@getNome');
Route::get('idade', 'MeuControlador@getIdade');
Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');


// O resource é interessante por que já cria automaticamente todos os metodos linkados com o controlador
// Com 7 metodos HTTP
Route::resource('clientes', 'ClienteControlador');

// Comentando para deixar o backup
/*
Route::get('/teste/sejabemvindo', function() {
    echo "Olá";
});

//Passagem de parametros
Route::get('ola/{nome}/{sobrenome}', function($nome, $sobrenome) {
    echo "Seu nome é: ". $nome . " ".$sobrenome;
});

//Passagem de parametros opcionais com validação
// o ? ínforma que é opcional, porém na funcção anonima eu preciso inicializar o mesmo com nullo
Route::get('seunome/{nome?}', function($nome=null) {

    if (isset($nome))
        return "Olá meu quero amigo " . $nome;
    return " Não retornou nada né kkk";
});

// Rotas com regras
//Acrescentando critérios de validação dos parametros através do critério where
Route::get('rotascomregras/{nome}/{n}', function($nome, $n) {
    
    for ($i = 0; $i< $n; $i++){
        echo "ola amigo " . $nome . "<br/>";
    }

})->where('nome','[a-zA-Z]+')->where('n','[1-9]+');

//Agrupando Rotas
Route::prefix( '/app')->group(function(){
    
    Route::get('/', function() {
        return view('app');
    })->name('app');
    
    Route::get('/user', function() {
        return view('user');
    })->name('app.user');

    Route::get('/profile', function() {
        return view('profile');
    })->name('app.profile');

});


Route::get('/produtos', function() {
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo   "<li>Notebook </li>";
    echo   "<li>Impressora </li>";
    echo   "<li>Mouse </li>";
    echo   "<li>Teclado </li>";
    echo   "<li>Monitor </li>";
    echo "</ol>";
})->name('meusprodutos');


//Redirecionamento de todas, tem a versão 1 (pouco utilizada) e 
//a versão 2 (mais utilizada e aconselhada)

Route::redirect('todosprodutos1', 'produtos', 301);

Route::get('todosprodutos2', function(){
    return redirect()->route('meusprodutos');
});


////////////////////////////////////////////////////
// METODOS HTTP


Route::post('/requisicoes', function(Request $request) {
    return "Hello Post";
});

Route::delete('/requisicoes', function(Request $request) {
    return "Hello Delete";
});

Route::put('/requisicoes', function(Request $request) {
    return "Hello put";
});

Route::patch('/requisicoes', function(Request $request) {
    return "Hello patch";
});

Route::get('/requisicoes', function(Request $request) {
    return "Hello get";
});

Route::options('/requisicoes', function(Request $request) {
    return "Hello options";
});
*/



Route::get('opcoes/{opcao?}', function($opcao = null) {
    return view('outras.opcoes', compact(['opcao']));
})->name('opcoes');


Route::get('bootstrap', function() {
    return view('outras.exemplo');
});

