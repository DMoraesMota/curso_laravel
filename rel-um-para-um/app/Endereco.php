<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Endereco extends Model
{
    public function cliente(){
        return $this->BelongsTo('App\Cliente', 'cliente_id', 'id');
    }
}
