<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{

    protected $fillable = [
        'mp_id',
        'proveedor_id',
        'cantidad',
        'estado_id',
    ];

    public function materiaPrima()
    {
        return $this->belongsTo(MateriaPrima::class,'mp_id');
    }
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
