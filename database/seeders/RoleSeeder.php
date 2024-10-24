<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        Role::insert([
            ['role' => 'client', 'created_at' => now(), 'updated_at' => now()],
            ['role' => 'driver', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
