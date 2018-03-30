<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FiscaliaDelitoComun extends Model
{
    protected $table = "fiscalias_delitos_comunes";
    protected $fillable = ['workflow_state'];

    public function fiscalia(){
        return $this->morphOne(Fiscalia::class, 'fiscable');
    }
}
