<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    // Ativando o middleware de Login antes de mostrar os dados
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        echo "<h4>Lista de Produtos</h4>";
        echo "<ul> ";
        echo "<li>Arroz</li>";
        echo "<li>Marcarrão</li>";
        echo "<li>Leite</li>";
        echo "<li>Melancia</li>";
        echo "<li>leitão carnudo</li>";
        echo "</ul>";
    }
}
