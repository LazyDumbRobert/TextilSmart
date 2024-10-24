<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Proveedor;
use Livewire\WithPagination;

class Proveedores extends Component
{
    use WithPagination;

    public function render()
    {
        $proveedores = Proveedor::paginate(10);
        return view('livewire.proveedores',compact('proveedores'));
    }
}
