<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursoOfendido extends Model
{
  public function recurso()
  {
      return $this->belongsTo(Recurso::class, 'id_recurso');
  }

  public function ofendido()
  {
      return $this->belongsTo(Ofendido::class, 'id_ofendido');
  }
}
