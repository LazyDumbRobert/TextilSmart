<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Proveedor;

class CrearProveedor extends Component
{
    public $nombre;
    public $nit;
    public $direccion;
    public $telefono;
    public $email;

    protected $rules = [
        'nombre' => 'required|string|max:255',  
        'nit' => 'required|string|regex:/^[0-9]+$/|min:8|max:20',  
        'direccion' => 'required|string|max:255',  
        'telefono' => 'required|string|regex:/^[0-9]+$/|min:7|max:15',
        'email' => 'required|email|max:255',  
    ];

    public function save()
    {
        $datos = $this->validate();
        Proveedor::create([
            'nombre'=>$datos['nombre'],
            'nit'=>$datos['nit'],
            'direccion'=>$datos['direccion'],
            'telefono'=>$datos['telefono'],
            'email'=>$datos['email'],
            'activo'=>1,
        ]);

        return redirect()->route('proveedores')->with('success','Proveedor creado correctamente');
    }
    public function render()
    {
        return view('livewire.crear-proveedor');
    }
}
