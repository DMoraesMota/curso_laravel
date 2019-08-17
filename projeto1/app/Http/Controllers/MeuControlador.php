<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos()
    {
        echo "<h1>Produtos</h1>";
        echo "<ol>";
        echo   "<li>Notebook </li>";
        echo   "<li>Impressora </li>";
        echo   "<li>Mouse </li>";
        echo   "<li>Teclado </li>";
        echo   "<li>Monitor </li>";
        echo "</ol>";
    }

    public function getNome()
    {
        return "Diego de Moraes Mota";
    }

    public function getIdade()
    {
        return "26 Anos";
    }

    public function multiplicar($n1, $n2)
    {
        return " A multiplicação é: " . $n1 *  $n2;
    }

}
