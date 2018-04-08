<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoOfendido extends Model
{
    protected $table = "autos_ofendidos";

    public function auto()
    {
        return $this->belongsTo(Auto::class, 'id_auto');
    }

    public function ofendido()
    {
        return $this->belongsTo(Ofendido::class, 'id_ofendido');
    }
}
