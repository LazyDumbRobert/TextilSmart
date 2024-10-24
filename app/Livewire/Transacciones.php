<?php

namespace App\Livewire;

use Livewire\Component;

class Transacciones extends Component
{
    public $materiaprima;
    
    public function render()
    {
        return view('livewire.transacciones');
    }
}
