<?php

namespace App\View\Components;

use Closure;
use App\Models\Producto;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Productos extends Component
{
    public $productos;

    public function __construct($productos)
    {
        $this->productos = $productos;
    }

    public function render(): View|Closure|string
    {
        return view('components.productos');
    }
}
