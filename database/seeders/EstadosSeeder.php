<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = [
            ['estado' => 'Pendiente'],
            ['estado' => 'Procesada'],
            ['estado' => 'Cerrada'],
        ];

        DB::table('estados')->insert($estados);
    }
}
