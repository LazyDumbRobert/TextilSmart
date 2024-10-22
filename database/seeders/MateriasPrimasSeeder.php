<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MateriasPrimasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materiaPrimas = [
            [
                'nombre' => 'Algodón',
                'unidad_medida' => 'kg',
                'cantidad_disponible' => 150.00,
                'precio_por_unidad' => 5.50,
                'proveedor_id' => 1,
                'activo' => true,
                'descripcion' => 'Algodón 100% natural.',
            ],
            [
                'nombre' => 'Poliéster',
                'unidad_medida' => 'kg',
                'cantidad_disponible' => 200.00,
                'precio_por_unidad' => 4.00,
                'proveedor_id' => 2,
                'activo' => true,
                'descripcion' => 'Poliéster reciclado.',
            ],
            [
                'nombre' => 'Lana',
                'unidad_medida' => 'kg',
                'cantidad_disponible' => 100.00,
                'precio_por_unidad' => 15.00,
                'proveedor_id' => 3,
                'activo' => true,
                'descripcion' => 'Lana de oveja.',
            ],
            [
                'nombre' => 'Seda',
                'unidad_medida' => 'kg',
                'cantidad_disponible' => 50.00,
                'precio_por_unidad' => 25.00,
                'proveedor_id' => 4,
                'activo' => true,
                'descripcion' => 'Seda natural.',
            ],
            [
                'nombre' => 'Mezclilla',
                'unidad_medida' => 'm',
                'cantidad_disponible' => 300.00,
                'precio_por_unidad' => 6.50,
                'proveedor_id' => 5,
                'activo' => true,
                'descripcion' => 'Tela de mezclilla.',
            ],
            [
                'nombre' => 'Nylon',
                'unidad_medida' => 'kg',
                'cantidad_disponible' => 180.00,
                'precio_por_unidad' => 3.50,
                'proveedor_id' => 6,
                'activo' => true,
                'descripcion' => 'Nylon de alta resistencia.',
            ],
            [
                'nombre' => 'Elastano',
                'unidad_medida' => 'kg',
                'cantidad_disponible' => 90.00,
                'precio_por_unidad' => 12.00,
                'proveedor_id' => 7,
                'activo' => true,
                'descripcion' => 'Elastano para prendas ajustadas.',
            ],
            [
                'nombre' => 'Rayón',
                'unidad_medida' => 'kg',
                'cantidad_disponible' => 120.00,
                'precio_por_unidad' => 8.00,
                'proveedor_id' => 8,
                'activo' => true,
                'descripcion' => 'Rayón suave y ligero.',
            ],
            [
                'nombre' => 'Polipropileno',
                'unidad_medida' => 'kg',
                'cantidad_disponible' => 140.00,
                'precio_por_unidad' => 2.50,
                'proveedor_id' => 9,
                'activo' => true,
                'descripcion' => 'Material resistente al agua.',
            ],
            [
                'nombre' => 'Tencel',
                'unidad_medida' => 'kg',
                'cantidad_disponible' => 70.00,
                'precio_por_unidad' => 18.00,
                'proveedor_id' => 10,
                'activo' => true,
                'descripcion' => 'Tencel sostenible.',
            ],
            [
                'nombre' => 'Canvas',
                'unidad_medida' => 'm',
                'cantidad_disponible' => 250.00,
                'precio_por_unidad' => 7.00,
                'proveedor_id' => 1,
                'activo' => true,
                'descripcion' => 'Tela canvas resistente.',
            ],
            [
                'nombre' => 'Popelín',
                'unidad_medida' => 'm',
                'cantidad_disponible' => 300.00,
                'precio_por_unidad' => 5.00,
                'proveedor_id' => 2,
                'activo' => true,
                'descripcion' => 'Tela popelín ligera.',
            ],
            [
                'nombre' => 'Lino',
                'unidad_medida' => 'kg',
                'cantidad_disponible' => 60.00,
                'precio_por_unidad' => 20.00,
                'proveedor_id' => 3,
                'activo' => true,
                'descripcion' => 'Lino natural y fresco.',
            ],
            [
                'nombre' => 'Satin',
                'unidad_medida' => 'm',
                'cantidad_disponible' => 80.00,
                'precio_por_unidad' => 9.00,
                'proveedor_id' => 4,
                'activo' => true,
                'descripcion' => 'Tela satinada brillante.',
            ],
            [
                'nombre' => 'Gasa',
                'unidad_medida' => 'm',
                'cantidad_disponible' => 150.00,
                'precio_por_unidad' => 4.50,
                'proveedor_id' => 5,
                'activo' => true,
                'descripcion' => 'Tela gasa liviana.',
            ],
            [
                'nombre' => 'Brocado',
                'unidad_medida' => 'm',
                'cantidad_disponible' => 30.00,
                'precio_por_unidad' => 11.00,
                'proveedor_id' => 6,
                'activo' => true,
                'descripcion' => 'Tela brocada para vestidos.',
            ],
            [
                'nombre' => 'Cuero',
                'unidad_medida' => 'm2',
                'cantidad_disponible' => 25.00,
                'precio_por_unidad' => 50.00,
                'proveedor_id' => 7,
                'activo' => true,
                'descripcion' => 'Cuero de alta calidad.',
            ],
            [
                'nombre' => 'Vinilo',
                'unidad_medida' => 'm',
                'cantidad_disponible' => 200.00,
                'precio_por_unidad' => 3.00,
                'proveedor_id' => 8,
                'activo' => true,
                'descripcion' => 'Vinilo resistente al agua.',
            ],
            [
                'nombre' => 'Fleece',
                'unidad_medida' => 'kg',
                'cantidad_disponible' => 90.00,
                'precio_por_unidad' => 14.00,
                'proveedor_id' => 9,
                'activo' => true,
                'descripcion' => 'Fleece suave y cálido.',
            ],
            [
                'nombre' => 'Polar',
                'unidad_medida' => 'kg',
                'cantidad_disponible' => 110.00,
                'precio_por_unidad' => 10.00,
                'proveedor_id' => 10,
                'activo' => true,
                'descripcion' => 'Tela polar para abrigo.',
            ],
            [
                'nombre' => 'Denim',
                'unidad_medida' => 'm',
                'cantidad_disponible' => 240.00,
                'precio_por_unidad' => 8.50,
                'proveedor_id' => 1,
                'activo' => true,
                'descripcion' => 'Tela denim clásica.',
            ],
            [
                'nombre' => 'Organza',
                'unidad_medida' => 'm',
                'cantidad_disponible' => 120.00,
                'precio_por_unidad' => 6.00,
                'proveedor_id' => 2,
                'activo' => true,
                'descripcion' => 'Tela organza para decoración.',
            ],
            [
                'nombre' => 'Terry Cloth',
                'unidad_medida' => 'kg',
                'cantidad_disponible' => 80.00,
                'precio_por_unidad' => 7.50,
                'proveedor_id' => 3,
                'activo' => true,
                'descripcion' => 'Terry cloth absorbente.',
            ],
            [
                'nombre' => 'Microfibra',
                'unidad_medida' => 'kg',
                'cantidad_disponible' => 150.00,
                'precio_por_unidad' => 9.50,
                'proveedor_id' => 4,
                'activo' => true,
                'descripcion' => 'Microfibra suave y duradera.',
            ],
            [
                'nombre' => 'Taffeta',
                'unidad_medida' => 'm',
                'cantidad_disponible' => 60.00,
                'precio_por_unidad' => 11.50,
                'proveedor_id' => 5,
                'activo' => true,
                'descripcion' => 'Tela taffeta brillante.',
            ],
            [
                'nombre' => 'Faux Leather',
                'unidad_medida' => 'm2',
                'cantidad_disponible' => 100.00,
                'precio_por_unidad' => 25.00,
                'proveedor_id' => 6,
                'activo' => true,
                'descripcion' => 'Cuero sintético de alta calidad.',
            ],
            [
                'nombre' => 'Tartan',
                'unidad_medida' => 'm',
                'cantidad_disponible' => 90.00,
                'precio_por_unidad' => 12.00,
                'proveedor_id' => 7,
                'activo' => true,
                'descripcion' => 'Tela tartán de cuadros.',
            ],
            [
                'nombre' => 'Chiffon',
                'unidad_medida' => 'm',
                'cantidad_disponible' => 140.00,
                'precio_por_unidad' => 10.00,
                'proveedor_id' => 8,
                'activo' => true,
                'descripcion' => 'Chiffon ligero y transparente.',
            ],
            [
                'nombre' => 'Canvas de algodón',
                'unidad_medida' => 'm',
                'cantidad_disponible' => 80.00,
                'precio_por_unidad' => 5.75,
                'proveedor_id' => 9,
                'activo' => true,
                'descripcion' => 'Canvas de algodón natural.',
            ],
            [
                'nombre' => 'Tecido de Cobre',
                'unidad_medida' => 'm',
                'cantidad_disponible' => 50.00,
                'precio_por_unidad' => 8.25,
                'proveedor_id' => 10,
                'activo' => true,
                'descripcion' => 'Tecido de cobre antiestático.',
            ],
        ];

        DB::table('materia_primas')->insert($materiaPrimas);
    }
}
