<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;

class RendimientoOrdenProduccion extends Component
{
    public $ordenproduccion;
    public $cantidad_producida;
    protected $rules = [
        'cantidad_producida' => 'required|numeric|min:1'
    ];  

    public function registrar()
    {
        $datos = $this->validate();

        try {
            $this->ordenproduccion->cantidad_producido = $datos['cantidad_producida'];
            $this->ordenproduccion->estado_id =3;
            $this->ordenproduccion->fecha_final = Carbon::now();
            $this->ordenproduccion->save();

            $producto = $this->ordenproduccion->producto;
            $producto->stock += $datos['cantidad_producida'];
            $producto->save();

            foreach ($this->ordenproduccion->materiasPrimas as $linea) {
                $materiaPrima = $linea->materiaPrima;
                $materiaPrima->cantidad_disponible -= $linea->cantidad_utilizada;
                $materiaPrima->save();
            }

            return redirect()->route('produccion')->with('success','Orden de Producción Cerrada Correctamente');

            
        } catch (\Throwable $th) {
            $this->addError('error','Hubo un error al registrar la orden, intentelo de nuevo más tarde');
        }
    }
    public function render()
    {
        return view('livewire.rendimiento-orden-produccion');
    }
}
