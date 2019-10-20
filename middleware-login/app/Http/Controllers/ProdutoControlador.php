<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    private $produtos = ["Televisão 40","Notebook Acer","Maquina de Lavar", "HD Externo"];

    public function __construct()
    {
        $this->middleware('loginValidar');
    }

    public function index()
    {
        echo "<h3>Produtos</h3>";
        echo "<ol>";
        foreach ($this->produtos as $key) {
            echo "<li>". $key ."</li>";
        }
        echo "</ol>";
    }
}
