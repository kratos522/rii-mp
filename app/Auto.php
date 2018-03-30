<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table = "autos";

    protected $fillable = [
      "fecha",
      "id_lugar_mp",
      "id_ofendido",
      "id_imputado",
      "id_expediente",
      "id_fiscalia",
      "encabezado",
      "documento"
    ];

    public function documento(){
        return $this->morphOne(Documento::class, 'documentable');
    }

    public function autoimputados()
    {
        return $this->hasMany(AutoImputado::class);
    }

    public function autoofendidos()
    {
        return $this->hasMany(AutoOfendido::class);
    }

    public function lugar()
    {
        return $this->belongsTo(Lugar::class);
    }

    public function expediente()
    {
        return $this->belongsTo(Expediente::class);
    }

    public function fiscalia()
    {
        return $this->belongsTo(Fiscalia::class);
    }

    public function autoable()
    {
       return $this->morphTo();
    }
}
