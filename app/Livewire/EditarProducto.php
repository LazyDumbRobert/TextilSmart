<?php

namespace App\Livewire;

use Livewire\Component;

class EditarProducto extends Component
{
    public $producto;
    public function render()
    {
        return view('livewire.editar-producto');
    }
}
