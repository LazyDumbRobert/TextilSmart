<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Producto;
use Livewire\WithPagination;

class Inventario extends Component
{
    use WithPagination;

    protected $listeners = ['cambiarEstado'];

    public function render()
    {
        $productos = Producto::paginate(5);
        return view('livewire.inventario',['productos' => $productos]);
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
