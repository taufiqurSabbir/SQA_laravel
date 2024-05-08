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
        Schema::create('ti_igniter_pages_menuses', function (Blueprint $table) {
            $table->id();
            $table->string('theme_code', 128);
            $table->string('name', 128);
            $table->string('code', 128);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_igniter_pages_menuses');
    }
};
