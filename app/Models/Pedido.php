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

    protected $casts = [
        'fecha_pedido' => 'datetime',
    ];

    public function productos()
    {
        return $this->hasMany(PedidoDetalle::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
