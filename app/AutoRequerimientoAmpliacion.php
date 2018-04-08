<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoRequerimientoAmpliacion extends Model
{
    protected $table = "autos_requerimientos_ampliaciones";

    protected $fillable = [
      "diligencias_ampliacion",
      "fecha_inicio",
      "fecha_fin",
      "id_denuncia"
    ];

    public function auto(){
        return $this->morphOne(Auto::class, 'autoable');
    }

    public function denuncia()
    {
        return $this->belongsTo(Denuncia::class, 'id_denuncia');
    }
}
