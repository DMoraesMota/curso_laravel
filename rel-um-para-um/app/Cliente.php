<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function endereco(){

        /* Deste tipo, o laravel faz todas as amarrações corretas para buscar o endereço de acordo com as chaves */
        /* Cliente_id => é a referencia que estou buscando na tabela endereço
            id => é a referencia que estou buscando na tabela cliente para fazer a amarraçaõ */
        return $this->hasOne('App\Endereco', 'cliente_id', 'id');
    }
}
