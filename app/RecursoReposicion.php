<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursoReposicion extends Model
{
    protected $table = "recursos_reposicion";

    public function recurso(){
        return $this->morphOne(Recurso::class, 'recursable');
    }  
}
