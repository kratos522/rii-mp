<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoRequerimientoInvestigativo extends Model
{
    protected $table = "autos_requerimientos_investigativos";

    protected $fillable = [
      "diligencias_practicarse",
      "fecha_inicio",
      "fecha_fin",
      "id_denuncia"
    ];

    public function denuncia()
    {
        return $this->belongsTo(Denuncia::class);
    }
}
