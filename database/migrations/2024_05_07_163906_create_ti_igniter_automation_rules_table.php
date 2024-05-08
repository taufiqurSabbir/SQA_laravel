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
        Schema::create('ti_igniter_automation_rules', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->string('code', 128);
            $table->string('description', 128);
            $table->text('event_class')->nullable();
            $table->text('config_data')->nullable();
            $table->tinyInteger('is_custom')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_igniter_automation_rules');
    }
};
