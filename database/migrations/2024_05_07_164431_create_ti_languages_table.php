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
        Schema::create('ti_languages', function (Blueprint $table) {
            $table->id();
            $table->string('code', 32)->unique();
            $table->string('name', 128);
            $table->string('image', 128)->nullable();
            $table->string('idiom', 128);
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('can_delete')->default(0);
            $table->unsignedInteger('original_id')->nullable();
            $table->string('version', 128)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_languages');
    }
};
