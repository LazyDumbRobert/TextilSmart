<?php

namespace App\Services;

use App\Models\MateriaPrima;
use App\Models\User;
use App\Models\OrdenCompra;
use App\Notifications\NotificacionReabastecimiento;

class ReabastecimientoService
{
    public function checkAndReplenishStock()
    {

        $productosNecesitanReabastecimiento = MateriaPrima::whereColumn('cantidad_disponible', '<', 'punto_reorden')->get();
        foreach ($productosNecesitanReabastecimiento as $producto) {
          
            if (!$this->existeOrdenCompraPendiente($producto->id)) {
                $this->generarOrdenCompra($producto);
            }
        }
    }

    public function generarOrdenCompra(MateriaPrima $producto)
    {
        $orden = OrdenCompra::create([
            'mp_id' => $producto->id,
            'cantidad' => $producto->cantidad_reabastecer,
            'proveedor_id' => $producto->proveedor_id,
            'estado_id' => 1, 
            'cantidad_disponible_anterior' => $producto->cantidad_disponible, 
        ]);

        $usuario = User::find(5);
        $usuario->notify(new NotificacionReabastecimiento($orden));
    }

    private function existeOrdenCompraPendiente($productoId)
    {
        return OrdenCompra::where('mp_id', $productoId)
            ->where('estado_id', 1) 
            ->exists();
    }
}
