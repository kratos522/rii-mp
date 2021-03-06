<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursoImputado extends Model
{

  public function recurso()
  {
      return $this->belongsTo(Recurso::class, 'id_recurso');
  }

  public function imputado()
  {
      return $this->belongsTo(Imputado::class, 'id_imputado');
  }
}
