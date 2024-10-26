<?php

namespace App\Livewire;

use App\Models\Estado;
use App\Models\Pedido;
use Livewire\Component;
use Livewire\WithPagination;

class Pedidos extends Component
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
            $pedidos = Pedido::paginate(10);
        }else{
            $pedidos = Pedido::where('estado_id', $this->estado)->paginate(10);
        }

        return view('livewire.pedidos', compact('pedidos'));
    }
}
