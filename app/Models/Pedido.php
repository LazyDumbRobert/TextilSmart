<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'user_id',
        'fecha_pedido',
        'fecha_entrega',
        'estado_id',
        'monto_total',
        'direccion_entrega',
        'costo_envio',
    ];
}
