<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('catalog_vehicle_types', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name'); // Nombre del tipo de vehículo
            $table->decimal('capacity', 5, 2); // Capacidad de carga (en toneladas o kilogramos)
            $table->string('capacity_unit'); // Unidad de la capacidad (kg, t)
            $table->decimal('length', 4, 2); // Longitud del vehículo
            $table->decimal('width', 4, 2); // Ancho del vehículo
            $table->decimal('height', 4, 2); // Altura del vehículo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalog_vehicle_types ');
    }
};
