<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    public $headers;
    public $datos;

    public function __construct($headers,$data)
    {
        $this->headers = $headers;
        $this->datos = $this->formatData($data);
    }

    protected function formatData($data)
    {
        // Convertir Eloquent Collection o array de arrays a un formato compatible
        if ($data instanceof \Illuminate\Database\Eloquent\Collection) {
            return $data->map(function ($item) {
                return $item->only($this->headers); // Solo obtener las columnas que están en los headers
            });
        }

        // Si es un array, solo retorna
        return collect($data);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
