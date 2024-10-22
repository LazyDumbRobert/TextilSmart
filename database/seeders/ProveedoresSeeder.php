<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proveedores = [
            [
                'nombre' => 'Textiles S.A.',
                'nit' => '123456789',
                'direccion' => 'Calle 1 #10-20',
                'telefono' => '123456789',
                'email' => 'contacto@textilessa.com',
                'activo' => true,
            ],
            [
                'nombre' => 'Moda y Estilo Ltda.',
                'nit' => '987654321',
                'direccion' => 'Calle 2 #30-40',
                'telefono' => '987654321',
                'email' => 'info@modayestilo.com',
                'activo' => true,
            ],
            [
                'nombre' => 'Suministros Textiles',
                'nit' => '234567890',
                'direccion' => 'Calle 3 #50-60',
                'telefono' => '234567890',
                'email' => 'ventas@suministrostextiles.com',
                'activo' => true,
            ],
            [
                'nombre' => 'Textiles de Calidad',
                'nit' => '345678901',
                'direccion' => 'Calle 4 #70-80',
                'telefono' => '345678901',
                'email' => 'info@textilesdecalidad.com',
                'activo' => true,
            ],
            [
                'nombre' => 'Fábrica de Ropa',
                'nit' => '456789012',
                'direccion' => 'Calle 5 #90-100',
                'telefono' => '456789012',
                'email' => 'contacto@fabricaderopa.com',
                'activo' => true,
            ],
            [
                'nombre' => 'Confecciones Modernas',
                'nit' => '567890123',
                'direccion' => 'Calle 6 #110-120',
                'telefono' => '567890123',
                'email' => 'info@confeccionesmodernas.com',
                'activo' => true,
            ],
            [
                'nombre' => 'Ropa y Accesorios',
                'nit' => '678901234',
                'direccion' => 'Calle 7 #130-140',
                'telefono' => '678901234',
                'email' => 'contacto@ropayaccesorios.com',
                'activo' => true,
            ],
            [
                'nombre' => 'Surtido Textil',
                'nit' => '789012345',
                'direccion' => 'Calle 8 #150-160',
                'telefono' => '789012345',
                'email' => 'ventas@surtidotextil.com',
                'activo' => true,
            ],
            [
                'nombre' => 'Vestir S.A.',
                'nit' => '890123456',
                'direccion' => 'Calle 9 #170-180',
                'telefono' => '890123456',
                'email' => 'info@vestirs.com',
                'activo' => true,
            ],
            [
                'nombre' => 'Estilos Únicos',
                'nit' => '901234567',
                'direccion' => 'Calle 10 #190-200',
                'telefono' => '901234567',
                'email' => 'contacto@estilosunicos.com',
                'activo' => true,
            ],
        ];

        DB::table('proveedors')->insert($proveedores);
    }
}
