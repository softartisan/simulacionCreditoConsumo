<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
     protected $fillable = [
        'user_id', 'monto', 'costo_total','interes','cuotas','primer_vencimiento','estado','valor_cuota',
    ];


public function user(){
return $this->belongsTo('App\User');
}

}