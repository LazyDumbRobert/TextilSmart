<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoDetalle extends Model
{
    protected $fillable =[
        'producto_id',
        'pedido_id',
        'cantidad'
    ];
}
