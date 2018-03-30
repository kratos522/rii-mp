<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoImputado extends Model
{
    protected $table = "autos_imputados";

    public function auto()
    {
        return $this->belongsTo(Auto::class);
    }

    public function imputado()
    {
        return $this->belongsTo(Imputado::class);
    }
}
