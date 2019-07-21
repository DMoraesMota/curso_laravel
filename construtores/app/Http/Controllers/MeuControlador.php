<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function getNome(){
        return "Diego de Moraes Mota";
    }

    public function getIdade(){
        return " A idade é: 26 Anos";
    }

    public function multiplicar($n1, $n2){
        return " Retorno da multiplicação é : " . $n1 * $n2;
    }

    public function getNomeById($id){
        $v = ["Diego","Karol","Marcos"];

        if ($id >=0 && $id < count($v)){
            return $v[$id];
        } else{
            return "Id Não encontrado";
        }
    }
}

