<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursoApelacion extends Model
{
    protected $table = "recursos_apelacion";

    public function recurso(){
        return $this->morphOne(Recurso::class, 'recursable');
    }
}
