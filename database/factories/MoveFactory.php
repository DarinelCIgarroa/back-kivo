<?php

namespace Database\Factories;

use App\Models\catalogs\CatalogMoveStatus;
use App\Models\catalogs\CatalogVehicleType;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Move>
 */
class MoveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => User::where('role_id', Role::CLIENT)->inRandomOrder()->first()->id,
            'driver_id' => User::where('role_id', Role::DRIVER)->inRandomOrder()->first()->id,
            'catalog_vehicle_type_id' => CatalogVehicleType::inRandomOrder()->first()->id,
            'catalog_move_status_id' => CatalogMoveStatus::inRandomOrder()->first()->id,
            'origin_address' => $this->faker->address,
            'origin_place_id' => $this->faker->regexify('[A-Za-z0-9_-]{27}'),
            'destination_address' => $this->faker->address,
            'destination_place_id' => $this->faker->regexify('[A-Za-z0-9_-]{27}'),
            'proposed_price' => $this->faker->randomFloat(2, 100, 5000),
            'price' => $this->faker->randomFloat(2, 100, 5000),
            'accepted_at' => $this->faker->optional()->dateTime(),
            'folio' => $this->faker->unique()->isbn10(),
        ];
    }    
}
