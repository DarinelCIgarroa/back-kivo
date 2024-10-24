<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogMoveStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalog_move_statuses')->insert([
            ['name' => 'Pendiente', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aceptado', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'En progreso', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Finalizado', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cancelado', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
