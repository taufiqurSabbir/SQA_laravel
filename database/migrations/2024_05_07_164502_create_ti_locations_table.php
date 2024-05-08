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
        Schema::create('ti_locations', function (Blueprint $table) {
            $table->id();
            $table->string('location_name', 128);
            $table->string('location_email', 96);
            $table->text('description')->nullable();
            $table->string('location_address_1', 128)->nullable();
            $table->string('location_address_2', 128)->nullable();
            $table->string('location_city', 128)->nullable();
            $table->string('location_state', 128)->nullable();
            $table->string('location_postcode', 10)->nullable();
            $table->text('location_telephone')->nullable();
            $table->double('location_lat')->nullable();
            $table->double('location_lng')->nullable();
            $table->integer('location_radius')->nullable();
            $table->tinyInteger('location_status')->nullable();
            $table->string('permalink_slug', 128)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_locations');
    }
};
