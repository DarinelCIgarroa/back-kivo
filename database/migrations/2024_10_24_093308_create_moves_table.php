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
        Schema::create('moves', function (Blueprint $table) {
            $table->id();
            // Relación con otras tablas
            $table->foreignId('client_id')->constrained('users');
            $table->foreignId('driver_id')->nullable()->constrained('users');
            $table->foreignId('catalog_vehicle_type_id')->nullable()->constrained('catalog_vehicle_types');
            $table->foreignId('catalog_move_status_id')->constrained('catalog_move_statuses');

            // Campos para direcciones y place_id
            $table->text('origin_address');
            $table->string('origin_place_id');
            $table->text('destination_address');
            $table->string('destination_place_id');

            $table->decimal('proposed_price', 10, 2);
            $table->decimal('price', 10, 2)->nullable();
            $table->timestamp('accepted_at')->nullable();
            $table->string('folio')->unique();

            $table->timestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moves');
    }
};
