<?php

namespace App\Livewire;

use App\Models\Producto;
use Livewire\Component;
use Darryldecode\Cart\Cart;
class Carrito extends Component
{
    public $items;
    public $total;
    public $envio;

    public function mount()
    {
        $this->envio = 35;
        $this->mostrarDatos();
    }

    public function mostrarDatos()
    {
        $this->items = \Cart::getContent();

        $this->items = $this->items->sortBy(function ($item) {
            return $item->id; 
        })->values(); 
        $this->total = \Cart::getTotal(); 
    }

    public function eliminar($id)
    {
        \Cart::remove($id);
        $this->mostrarDatos();
    }

    public function agregarUno($id)
    {
        $producto = Producto::find($id);
        $cantidadEnCarrito = \Cart::get($id) ? \Cart::get($id)->quantity : 0;
        if($producto->stock > $cantidadEnCarrito)
        {
            \Cart::update($id, array(
                'quantity' => +1, 
            ));
        }
       
        $this->mostrarDatos();
    }

    public function restarUno($id)
    {
        \Cart::update($id, array(
            'quantity' => -1, 
        ));
        $this->mostrarDatos();
    }

    public function render()
    {
        return view('livewire.carrito');
    }
}
