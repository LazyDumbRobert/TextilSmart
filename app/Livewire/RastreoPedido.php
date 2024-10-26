<?php

namespace App\Livewire;

use Livewire\Component;

class RastreoPedido extends Component
{
    public $pedido;
    public $progress;

    public function mount()
    {
        if($this->pedido->estado_id == 1)
        {
            $this->progress = 0;
        }
        elseif($this->pedido->estado_id==2)
        {
            $this->progress = 50;
        }else
        {
            $this->progress = 100;
        }
    }
    public function render()
    {
        return view('livewire.rastreo-pedido');
    }
}
