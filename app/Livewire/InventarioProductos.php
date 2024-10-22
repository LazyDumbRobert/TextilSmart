<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Producto;
use Livewire\WithPagination;

class InventarioProductos extends Component
{
    use WithPagination;

    protected $listeners = ['cambiarEstado'];

    public function render()
    {
        $productos = Producto::paginate(5);
        return view('livewire.inventarioProductos',['productos' => $productos]);
    }

    public function cambiarEstado(Producto $producto)
    {
        $producto->activo = ($producto->activo == 1) ? 0 : 1;
        $producto->save();

        $this->render();
    }

    public function updatingPage()
    {
        
    }


}
