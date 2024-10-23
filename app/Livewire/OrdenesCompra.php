<?php

namespace App\Livewire;

use App\Models\OrdenCompra;
use Livewire\Component;
use Livewire\WithPagination;

class OrdenesCompra extends Component
{
    use WithPagination;
    
    public function render()
    {
        $ocs = OrdenCompra::paginate(10);
        return view('livewire.ordenes-compra',compact('ocs'));
    }
}
