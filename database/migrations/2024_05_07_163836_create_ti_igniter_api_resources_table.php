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
        Schema::create('ti_igniter_api_resources', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->string('endpoint', 128);
            $table->string('controller', 128);
            $table->string('description', 128)->nullable();
            $table->text('meta')->nullable();
            $table->tinyInteger('is_custom')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_igniter_api_resources');
    }
};
