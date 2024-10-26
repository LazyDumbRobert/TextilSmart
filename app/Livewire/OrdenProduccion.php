<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;

class OrdenProduccion extends Component
{
    public $ordenproduccion;

    public function actualizar()
    {
        $this->ordenproduccion->estado_id = 2;
        $this->ordenproduccion->fecha_inicio = Carbon::now();
        $this->ordenproduccion->save();

        return redirect()->route('produccion')->with('sucess','Orden de Producción Actualizada Correctamente');
    }
    public function render()
    {
        return view('livewire.orden-produccion');
    }
}
