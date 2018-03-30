<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $table = "recursos";

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

    public function recursoimputados()
    {
        return $this->hasMany(RecursoImputado::class);
    }

    public function recursoreposicion()
    {
        return $this->hasMany(RecursoReposicion::class);
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

    public function recursable()
    {
       return $this->morphTo();
    }
}
