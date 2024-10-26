<?php

namespace App\Livewire;

use App\Models\MateriaPrima;
use App\Models\OrdenProduccion;
use App\Models\OrdenProduccionDetalle;
use App\Models\Producto;
use Livewire\Component;

class CrearOrdenProduccion extends Component
{
    public $fecha_ejecucion;
    public $producto_id;
    public $productos;
    public $materia_seleccionada = [];
    protected $listeners = ['actualizarMateriaSeleccionada'];
    protected $rules = [
        'fecha_ejecucion' => 'required|date|after_or_equal:today',
        'producto_id' => 'required',
    ];

    public function mount()
    {
        $this->productos = Producto::all();
    }
    public function save()
    {
        $datos = $this->validate();

        if(count($this->materia_seleccionada) == 0)
        {
            $this->addError('error','Debe seleccionar al menos una materia prima');
            return;
        }

        try {
            $ordenP = OrdenProduccion::create([
                'producto_id' => $datos['producto_id'],
                'fecha_ejecucion'  => $datos['fecha_ejecucion'],
                'estado_id' => 1
            ]);

            foreach ($this->materia_seleccionada as $materia) {
                OrdenProduccionDetalle::create([
                    'orden_produccion_id' => $ordenP->id,
                    'materia_prima_id' => $materia['id'],
                    'cantidad_utilizada' => $materia['cantidad_tomar'],
                ]);
            }

            return redirect()->route('produccion')->with('success','Orden de Producción Creada Correctamente');
        } catch (\Throwable $th) {
            $this->addError('error','Hubo un error al crear la orden de producción, intenlo de nuevo más tarde');
            return;
        }

        
    }

    public function actualizarMateriaSeleccionada($value)
    {
        $this->materia_seleccionada = $value;
    }
    public function render()
    {
        return view('livewire.crear-orden-produccion');
    }
}
