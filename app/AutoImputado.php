<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoImputado extends Model
{
    protected $table = "autos_imputados";

    public function auto()
    {
        return $this->belongsTo(Auto::class, 'id_auto');
    }

    public function imputado()
    {
        return $this->belongsTo(Imputado::class, 'id_imputado');
    }
}
