<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Proveedor;

class EditarMateriaPrima extends Component
{
    public $materiaprima;
    public $proveedores;

    protected $rules = [
        ''
    ];
    public function mount()
    {
        $this->proveedores = Proveedor::all();
    }

    public function save()
    {
        dd('guardando');
    }
    public function render()
    {
        return view('livewire.editar-materia-prima');
    }
}
