<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MateriaPrima;
use Livewire\WithPagination;

class InventarioMP extends Component
{
    use WithPagination;

    protected $listeners = ['cambiarEstado'];

    public function render()
    {
        $materiasPrimas = MateriaPrima::paginate(10);
        return view('livewire.inventario-m-p',['materiasPrimas' => $materiasPrimas]);
    }

    // public function cambiarEstado(MateriaPrima $producto)
    // {
    //     $producto->activo = ($producto->activo == 1) ? 0 : 1;
    //     $producto->save();

    //     $this->render();
    // }

    public function updatingPage()
    {
        
    }
}
