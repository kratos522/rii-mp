<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursoAmparo extends Model
{
    protected $table = "recursos_amparo";

    public function recurso(){
        return $this->morphOne(Recurso::class, 'recursable');
    }
}
