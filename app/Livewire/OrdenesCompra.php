<?php

namespace App\Livewire;

use App\Models\Estado;
use Livewire\Component;
use App\Models\OrdenCompra;
use Livewire\WithPagination;

class OrdenesCompra extends Component
{
    use WithPagination;
    public $estados;
    public $estado = 10;

    protected $rules = [
        'estado' => 'required|not_in:0',
    ];

    public function mount()
    {
        $this->estados = Estado::all();
    }

    public function mostrarDatos()
    {
        $datos = $this->validate();
        $this->estado = (int) $datos['estado'];
    }

    public function render()
    {
        if($this->estado == 10){
            $ocs = OrdenCompra::paginate(10);
        }else{
            $ocs = OrdenCompra::where('estado_id', $this->estado)->paginate(10);
        }
        return view('livewire.ordenes-compra',compact('ocs'));
    }
}
