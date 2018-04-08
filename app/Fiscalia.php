<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiscalia extends Model
{

  public function dependencia()
  {
      return $this->belongsTo(Dependencia::class);
  }

  public function fiscales()
  {
      return $this->hasMany(Fiscal::class);
  }

  public function fiscales_asignados()
  {
      return $this->hasMany(FiscalAsignado::class);
  }

  public function delitos()
  {
      return $this->hasMany(FiscaliaDelito::class);
  }

  public function denuncias()
  {
      return $this->hasMany(Denuncia::class);
  }

  public function fiscable()
  {
     return $this->morphTo();
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
