<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = [
            ['nombre' => 'Pantalón de mezclilla', 'precio_unitario' => 29.99, 'stock' => 50, 'imagen' => 'pantalon_mezclilla.jpg'],
            ['nombre' => 'Camisa de algodón', 'precio_unitario' => 19.99, 'stock' => 30, 'imagen' => 'camisa_algodon.jpg'],
            ['nombre' => 'Suéter de lana', 'precio_unitario' => 39.99, 'stock' => 20, 'imagen' => 'sweater_lana.jpg'],
            ['nombre' => 'Chaqueta de cuero', 'precio_unitario' => 89.99, 'stock' => 15, 'imagen' => 'chaqueta_cuero.jpg'],
            ['nombre' => 'Vestido de verano', 'precio_unitario' => 24.99, 'stock' => 25, 'imagen' => 'vestido_verano.jpg'],
            ['nombre' => 'Camiseta básica', 'precio_unitario' => 9.99, 'stock' => 100, 'imagen' => 'camiseta_basica.jpg'],
            ['nombre' => 'Pantalón corto', 'precio_unitario' => 19.99, 'stock' => 40, 'imagen' => 'pantalon_corto.jpg'],
            ['nombre' => 'Abrigo de invierno', 'precio_unitario' => 99.99, 'stock' => 10, 'imagen' => 'abrigo_invierno.jpg'],
            ['nombre' => 'Camisa de franela', 'precio_unitario' => 29.99, 'stock' => 35, 'imagen' => 'camisa_franela.jpg'],
            ['nombre' => 'Leggings', 'precio_unitario' => 19.99, 'stock' => 60, 'imagen' => 'leggings.jpg'],
            ['nombre' => 'Blusa de seda', 'precio_unitario' => 34.99, 'stock' => 20, 'imagen' => 'blusa_seda.jpg'],
            ['nombre' => 'Cárdigan', 'precio_unitario' => 49.99, 'stock' => 30, 'imagen' => 'cardigan.jpg'],
            ['nombre' => 'Chaleco', 'precio_unitario' => 39.99, 'stock' => 25, 'imagen' => 'chaleco.jpg'],
            ['nombre' => 'Pantalón de vestir', 'precio_unitario' => 49.99, 'stock' => 20, 'imagen' => 'pantalon_vestir.jpg'],
            ['nombre' => 'Falda', 'precio_unitario' => 24.99, 'stock' => 40, 'imagen' => 'falda.jpg'],
            ['nombre' => 'Sudadera', 'precio_unitario' => 34.99, 'stock' => 30, 'imagen' => 'sudadera.jpg'],
            ['nombre' => 'Shorts deportivos', 'precio_unitario' => 19.99, 'stock' => 50, 'imagen' => 'shorts_deportivos.jpg'],
            ['nombre' => 'Camisa de vestir', 'precio_unitario' => 39.99, 'stock' => 15, 'imagen' => 'camisa_vestir.jpg'],
            ['nombre' => 'Pantalón cargo', 'precio_unitario' => 29.99, 'stock' => 25, 'imagen' => 'pantalon_cargo.jpg'],
            ['nombre' => 'Mono de trabajo', 'precio_unitario' => 79.99, 'stock' => 10, 'imagen' => 'mono_trabajo.jpg'],
            ['nombre' => 'Bañador', 'precio_unitario' => 29.99, 'stock' => 20, 'imagen' => 'banador.jpg'],
            ['nombre' => 'Pijama', 'precio_unitario' => 34.99, 'stock' => 30, 'imagen' => 'pijama.jpg'],
            ['nombre' => 'Camisa de rayas', 'precio_unitario' => 24.99, 'stock' => 15, 'imagen' => 'camisa_rayas.jpg'],
            ['nombre' => 'Culottes', 'precio_unitario' => 29.99, 'stock' => 25, 'imagen' => 'culottes.jpg'],
            ['nombre' => 'Bolsos de tela', 'precio_unitario' => 19.99, 'stock' => 50, 'imagen' => 'bolso_tela.jpg'],
            ['nombre' => 'Guantes de lana', 'precio_unitario' => 14.99, 'stock' => 75, 'imagen' => 'guantes_lana.jpg'],
            ['nombre' => 'Bufanda', 'precio_unitario' => 19.99, 'stock' => 40, 'imagen' => 'bufanda.jpg'],
        ];

        DB::table('productos')->insert($productos);
    }
}
