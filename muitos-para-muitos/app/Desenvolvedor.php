<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desenvolvedor extends Model
{
    protected $table = 'desenvolvedores';

    // Retornando os projetos que o desenvolvedor possuir atraves do relacionamento belongsToMany
    function projetos(){
        // Primeiro parametro é o modelo de onde vou obter as informações
        // O segundo parametro é a tabela que vai conter o relacionamento de um com outro
        return $this->belongsToMany("App\Projeto","alocacoes")->withPivot('horas_semanais');
    }
}
