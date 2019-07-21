<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    public function listar(){
        $produtos = [
          "Notebook Acer",
          "Mouse",
          "Teclado",
          "Monitor",
          "Impressora",
          "Mouse Pad Sansung",
          "SSD 450 GB"
        ];

        return view('produtos', compact('produtos'));
    }

    public function secaoprodutos($palavra){
       return view('secao_produtos', compact('palavra'));
    }

    public function mostrar_opcoes(){
      return view('mostrar_opcoes');
    }

    public function opcoes($opcao){
      return view('opcoes', compact('opcao'));
    }

    public function loopFor($n){ 
      return view('loop_for',compact('n'));
    }

    public function loopForeach(){
        $produtos = [
          ["id"=> 1, "Nome"=>"Computador Desktop Antigo"],
          ["id"=> 2, "Nome"=>"Monitor DEll 21P "],
          ["id"=> 3, "Nome"=>"Razer Fone"],
          ["id"=> 4, "Nome"=>"Razer Mouse"],
          ["id"=> 5, "Nome"=>"Razer teclado"],
        ];

        return view('loop_foreach', compact('produtos'));
    }
}
