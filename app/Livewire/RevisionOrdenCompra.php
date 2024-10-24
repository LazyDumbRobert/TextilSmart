<?php

namespace App\Livewire;

use Livewire\Component;

class RevisionOrdenCompra extends Component
{
    public $ordencompra;
    
    public function rechazar()
    {

        try {
            $this->ordencompra->estado_id = 4;
            $this->ordencompra->save();

            return redirect()->route('oc')->with('success','La orden fue rechazada');
        } catch (\Throwable $th) {
            $this->addError('error','Existe algún problema la aprobar la orden de compra, intentelo de nuevo más tarde');
        }
    
    }

    public function aprobar()
    {
        try {
            
            $this->ordencompra->estado_id = 2;
            $this->ordencompra->save();

            return redirect()->route('oc')->with('success','Orden Aprobada Correctamente');
        } catch (\Throwable $th) {
            $this->addError('error','Existe algún problema la aprobar la orden de compra, intentelo de nuevo más tarde');
        }
    }

    
    public function recibido()
    {
        try {
            $producto = $this->ordencompra->materiaPrima;
            $producto->cantidad_disponible += $this->ordencompra->cantidad;
            $this->ordencompra->estado_id = 3;
            
            $producto->save();
            $this->ordencompra->save();

            return redirect()->route('oc')->with('success','Orden de Compra Actualizada Correctamente');
        } catch (\Throwable $th) {
            $this->addError('error','Existe algún problema la aprobar la orden de compra, intentelo de nuevo más tarde');
        }
    }
    public function render()
    {
        return view('livewire.revision-orden-compra');
    }
}
