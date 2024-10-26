<?php

namespace App\Livewire;

use Livewire\Component;

class ModalMateriaPrimaSeleccion extends Component
{
    public $modelo;
    public $cantidad;
    public $datosReturn = [];
    protected $rules = [
        'cantidad' => 'required|numeric|min:0.01',
    ];

    public function mount()
    {
        $this->cantidad = $this->modelo->cantidad_tomar ?? 0;
    }
    public function updatedCantidad($value)
    {
        if($value > $this->modelo->cantidad_disponible)
        {
            $this->addError('error','La cantidad es mayor a la que esta en stock');
        }else{
            $this->cantidad = $value;
        }
    }

    public function guardar()
    {
        $datos = $this->validate();
        $this->modelo->cantidad_tomar = $this->cantidad;

        $this->dispatch('tomarMateriaPrima', $this->modelo);
    }

    public function render()
    {
        return view('livewire.modal-materia-prima-seleccion');
    }
}
