<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Algodón Premium',
                'tipo' => 'Algodón',
                'precio_por_metro' => 12.99,
                'stock' => 100,
                'color' => 'Blanco',
                'activo' => true,
                'imagen' => 'algodon_premium.png', // Nombre de la imagen
            ],
            [
                'nombre' => 'Satin de Seda',
                'tipo' => 'Seda',
                'precio_por_metro' => 25.50,
                'stock' => 50,
                'color' => 'Rojo',
                'activo' => true,
                'imagen' => 'satin_seda.png',
            ],
            [
                'nombre' => 'Lino Natural',
                'tipo' => 'Lino',
                'precio_por_metro' => 18.75,
                'stock' => 30,
                'color' => 'Beige',
                'activo' => true,
                'imagen' => 'lino_natural.png',
            ],
            [
                'nombre' => 'Poliéster Brillante',
                'tipo' => 'Poliéster',
                'precio_por_metro' => 8.99,
                'stock' => 200,
                'color' => 'Negro',
                'activo' => true,
                'imagen' => 'poliester_brillante.png',
            ],
            [
                'nombre' => 'Tejido de Punto',
                'tipo' => 'Punto',
                'precio_por_metro' => 10.50,
                'stock' => 75,
                'color' => 'Azul',
                'activo' => true,
                'imagen' => 'tejido_punto.png',
            ],
            [
                'nombre' => 'Franela Suave',
                'tipo' => 'Franela',
                'precio_por_metro' => 15.00,
                'stock' => 40,
                'color' => 'Gris',
                'activo' => true,
                'imagen' => 'franela_suave.png',
            ],
            [
                'nombre' => 'Terciopelo',
                'tipo' => 'Terciopelo',
                'precio_por_metro' => 20.00,
                'stock' => 20,
                'color' => 'Verde',
                'activo' => true,
                'imagen' => 'terciopelo.png',
            ],
            [
                'nombre' => 'Chiffon Ligero',
                'tipo' => 'Chiffon',
                'precio_por_metro' => 14.50,
                'stock' => 60,
                'color' => 'Rosa',
                'activo' => true,
                'imagen' => 'chiffon_ligero.png',
            ],
            [
                'nombre' => 'Twill de Algodón',
                'tipo' => 'Algodón',
                'precio_por_metro' => 11.75,
                'stock' => 90,
                'color' => 'Caqui',
                'activo' => true,
                'imagen' => 'twill_algodon.png',
            ],
            [
                'nombre' => 'Denim',
                'tipo' => 'Denim',
                'precio_por_metro' => 17.99,
                'stock' => 25,
                'color' => 'Azul Oscuro',
                'activo' => true,
                'imagen' => 'denim.png',
            ],
        ]);
    }
}
