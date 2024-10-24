<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogVehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalog_vehicle_types')->insert([
            [
                'name' => 'Camioneta de Carga o Pickup',
                'capacity' => 1.3,
                'capacity_unit' => 't', // toneladas
                'length' => 1.5,
                'width' => 1.4,
                'height' => 1.8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Camión Grande',
                'capacity' => 5.0,
                'capacity_unit' => 't', // toneladas
                'length' => 5.8,
                'width' => 2.45,
                'height' => 2.2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Camión de Carga',
                'capacity' => 1.5,
                'capacity_unit' => 't', // toneladas
                'length' => 3.0,
                'width' => 2.0,
                'height' => 2.0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Auto',
                'capacity' => 450,
                'capacity_unit' => 'kg', // kilogramos
                'length' => 1.5,
                'width' => 1.3,
                'height' => 1.0,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
