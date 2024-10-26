<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdenProduccionDetalle extends Model
{
    protected $fillable = [
        'orden_produccion_id',
        'materia_prima_id',
        'cantidad_utilizada',  
    ];

    public function materiaPrima()
    {
       return  $this->belongsTo(MateriaPrima::class);
    }
}
