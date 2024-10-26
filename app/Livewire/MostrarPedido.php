<?php

namespace App\Livewire;

use Livewire\Component;

class MostrarPedido extends Component
{
    public $pedido;

    public function confirmarPedido()
    {
        $this->pedido->estado_id = 2;
        $this->pedido->save();

        return redirect()->route('pedidos')->with('success','Pedido Procesado Correctamente');
    }
    
    public function render()
    {
        return view('livewire.mostrar-pedido');
    }
}
