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

use App\Categoria;
use App\Produto;

Route::get('/categorias', function () {
    $cat = Categoria::all();

    foreach ($cat as $key => $c) {
        echo "<p>" . $c->id . " - " . $c->nome . "</p>";
    }
});

Route::get('/produtos', function () {
    $prod = Produto::all();

    echo "<table border=1>";
    echo "<thead><tr><td>Nome</td><td>Preço</td><td>Estoque</td><td>Categoria</td></tr></thread>";
    

    foreach ($prod as $key => $p) {
        echo "<tbody>";
       echo "<tr align='center'>";
       echo "<td align='center'>" . $p->nome . "</td>";
       echo "<td align='center'>" . $p->preco . "</td>";
       echo "<td align='center'>" . $p->estoque . "</td>";
       echo "<td align='center'>" . $p->categoria->nome . "</td>";
       echo "</tr>";
       echo "</tbody>";
    }

    echo "</table>";
});

Route::get('/categoriasProd', function () {
    $cat = Categoria::all();

    foreach ($cat as $key => $c) {
        echo "<p>" . $c->id . " - " . $c->nome . "</p>";

        $produtos = $c->produtos;

        if (count($produtos) > 0){
            echo "<ul>";
                foreach ($produtos as $prod) {
                    echo "<li>" . $prod->nome . "</li>";
                }
            echo "</ul>";
        }
    }
});

Route::get('/categoriasProd/json', function () {
    $cats = Categoria::with('produtos')->get();

    return $cats->toJson();
});

Route::get('/addProd', function () {
    
    $cat = Categoria::find(3);
    $prod = new Produto();
    $prod->nome = "Perfume Gostoso Demais";
    $prod->preco = 1500;
    $prod->estoque = 800;
    $prod->categoria()->associate($cat);
    $prod->save();
    return $prod->toJson();

});

Route::get('/addProd2', function () {
    
    $prod = Produto::find(6);

    if (isset($prod)){
        $prod->categoria()->dissociate();
        $prod->save();
        return $prod->toJson();
    }      
    
    return '';
});


Route::get('/adicionarproduto/{catid}', function ($catid) {
    $cat = Categoria::with('produtos')->find($catid);

    $prod = new Produto();
    $prod->nome = "Perfume Avon Menova";
    $prod->preco = 15;
    $prod->estoque = 5;

    if (isset($cat)){
        $cat->produtos()->save($prod);        
    }

    $cat->load('produtos');
    return $cat->toJson();

});