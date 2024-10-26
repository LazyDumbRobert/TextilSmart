<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MateriaPrima;

class SeleccionMateriaPrima extends Component
{
    public $materiasprimas;
    public $materias_primas_seleccionadas = [];
    public $materias_id = [];
    public $open = false;
    public $modelo;
    public $listeners = ['tomarMateriaPrima'];

    public function mount()
    {
        $this->materiasprimas = MateriaPrima::all();
    }
    
    public function openModal(MateriaPrima $modelo)
    {
        $this->modelo = $modelo;
        $this->open = true;

    }

    public function tomarMateriaPrima($modelo)
    {
        $this->materias_primas_seleccionadas[] = $modelo; 
        $this->materias_id = collect($this->materias_primas_seleccionadas)->pluck('id')->toArray();
        $this->open = false;

        $this->dispatch('actualizarMateriaSeleccionada',$this->materias_primas_seleccionadas);
    }

    public function render()
    {
        return view('livewire.seleccion-materia-prima');
    }
}
