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
        Schema::create('ti_location_options', function (Blueprint $table) {
            $table->id();
            $table->string('item', 128);
            $table->longText('value')->charset('utf8mb4')->collation('utf8mb4_bin')->nullable()->comment('(DC2Type:json)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_location_options');
    }
};
