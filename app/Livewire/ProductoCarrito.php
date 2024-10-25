<?php

namespace App\Livewire;

use Livewire\Component;
use Darryldecode\Cart\Cart;

class ProductoCarrito extends Component
{
    public $producto;
    public $flag;
    protected $listeners = ['agrgarProducto','eliminarProducto'];

    public function mount()
    {
        $this->flag = \Cart::get($this->producto->id);
    }
    public function agrgarProducto()
    {
        if($this->producto->stock > 0){
            \Cart::add(array(
                'id' => $this->producto->id,
                'name' => $this->producto->nombre,
                'price' => $this->producto->precio_unitario,
                'quantity' => 1,
                'attributes' => array('image' => $this->producto->imagen)
            ));
        }else{
            $this->addError('error','Ya queda en stock');
        }
       
        $this->flag = \Cart::get($this->producto->id);
    }

    public function eliminarProducto()
    {
        \Cart::remove($this->producto->id);
        $this->flag = \Cart::get($this->producto->id);
    }
    public function render()
    {
        return view('livewire.producto-carrito');
    }
}
