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

use App\Cliente;
use App\Endereco;

Route::get('/clientes', function () {
    $clientes = Cliente::all();

    foreach($clientes as $cliente){
        echo "<p> ID: ". $cliente->id . "</p>" ;
        echo "<p> Nome: ". $cliente->nome . "</p>" ;
        echo "<p> telefone: ". $cliente->telefone . "</p>" ;
        //$e = Endereco::where('cliente_id', $cliente->id)->first();

            /*Isto esta funcionando como um objeto dentro da classe cliente, isto graças ao HasOne feito lá no model cliente.php */
        echo "<p> Rua: ". $cliente->endereco->rua . "</p>" ;
        echo "<p> numero: ". $cliente->endereco->numero . "</p>" ;
        echo "<p> cep: ". $cliente->endereco->cep . "</p>" ;
        echo "<p> bairro: ". $cliente->endereco->bairro . "</p>" ;
        echo "<p> uf: ". $cliente->endereco->uf . "</p>" ;
        echo "<hr/>";
    }
});


Route::get('/enderecos', function () {
    $end = Endereco::all();

    /* O contrário de hasOne é BelongsTo que busca as informações na tabela cliente levando em consideração o Id da tablea endereco */ 
    foreach($end as $e){
        echo "<p> ID: ". $e->cliente_id . "</p>" ;
        echo "<p> Nome: ". $e->cliente->nome . "</p>" ;
        echo "<p> telefone: ". $e->cliente->telefone . "</p>" ;
        echo "<p> Rua: ". $e->rua . "</p>" ;
        echo "<p> numero: ". $e->numero . "</p>" ;
        echo "<p> cep: ". $e->cep . "</p>" ;
        echo "<p> bairro: ". $e->bairro . "</p>" ;
        echo "<p> uf: ". $e->uf . "</p>" ;
        echo "<hr/>";
    }
});

Route::get('/inserir', function(){
    
    $c = new Cliente();
    $c->nome = "Joao Barbosa";
    $c->telefone = "11-945613600"; 
    $c->save();

    $e = new Endereco();
    $e->rua = "Rua Maria Barbosa";
    $e->numero = 111;
    $e->bairro = "Centro";
    $e->cidade = "São Paulo";    
    $e->uf = "SP";    
    $e->cep = "05541888";
    
    $c->endereco()->save($e);
});

Route::get('/clientes/json', function(){
    //$clientes = Cliente::all();
    $clientes = Cliente::with('endereco')->get();
    return $clientes->toJson();
});

Route::get('/enderecos/json', function(){
    //$clientes = Cliente::all();
    $enderecos = Endereco::with('cliente')->get();
    return $enderecos->toJson();
});