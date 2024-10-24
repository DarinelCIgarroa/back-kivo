<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            CatalogVehicleTypeSeeder::class,
            CatalogMoveStatusSeeder::class,
            UserSeeder::class,
            MoveSeeder::class,
        ]);
    }
}
