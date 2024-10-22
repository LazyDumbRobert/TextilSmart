<?php

namespace App\Models;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Model;

class MateriaPrima extends Model
{
     
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }
}
