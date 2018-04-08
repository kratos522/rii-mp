<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
  protected $table = "lugares";
  protected $attributes = ['descripcion'=>null, 'caracteristicas'=>null];

  protected $fillable = [
    "documento_id",
    "descripcion",
    "caracteristicas",
  ];

  public function institucionable(){
      return $this->morphTo();
  }

  public function documento()
  {
      return $this->belongsTo(Documento::class);
  }

  public function hechos()
  {
      return $this->hasMany(Hecho::class);
  }

  public function recursos()
  {
      return $this->hasMany(Recurso::class, 'id_lugar');
  }

  public function autos()
  {
      return $this->hasMany(Auto::class, 'id_lugar');
  }
}
