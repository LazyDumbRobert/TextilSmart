<?php

namespace App\Livewire;

use App\Models\Pedido;
use Livewire\Component;

class Pedidos extends Component
{
    public $pedidos;

    public function mount()
    {
        $this->pedidos = Pedido::all();
    }
    public function render()
    {
        return view('livewire.pedidos');
    }
}
