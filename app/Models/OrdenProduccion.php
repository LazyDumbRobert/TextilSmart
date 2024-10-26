<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdenProduccion extends Model
{

    protected $casts = [
        'fecha_ejecucion' => 'datetime',
        'fecha_final' => 'datetime',
        'fecha_inicio' => 'datetime'
    ];

    protected $fillable = [
        'producto_id',
        'cantidad_producido',
        'fecha_inicio',
        'fecha_final',
        'fecha_ejecucion',
        'estado_id',
        'cantidad_produccion'
    ];



    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class); 
    }
}
