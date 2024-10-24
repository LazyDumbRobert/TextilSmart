<?php

namespace App\Livewire;

use App\Models\MateriaPrima;
use App\Models\OrdenCompra;
use Livewire\Component;
use App\Models\Proveedor;

class CrearOrdenCompra extends Component
{
    public $proveedores;
    public $materiasPrimas;

    public $proveedor_id;
    public $mp_id;
    public $cantidad;

    protected $rules = [
        'proveedor_id' => 'required',
        'mp_id'=> 'required',
        'cantidad'=> 'required',
    ];
    public function mount()
    {
        $this->proveedores = Proveedor::all();
        $this->materiasPrimas = MateriaPrima::all();
    }

    public function create()
    {
        $datos = $this->validate();

        $mp = MateriaPrima::find($datos['mp_id']);
        OrdenCompra::create([
            'proveedor_id' => $datos['proveedor_id'],
            'cantidad' => $datos['cantidad'],
            'mp_id' => $datos['mp_id'],
            'estado_id' => 1,
            'cantidad_disponible_anterior' => $mp->cantidad_disponible
        ]);

        return redirect()->route('oc')->with('success','Orden creada correctamente');
    }



    public function render()
    {
        return view('livewire.crear-orden-compra');
    }
}
