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
        Schema::create('ti_igniter_pages_menu_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('menu_id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('title', 128);
            $table->string('code', 128);
            $table->string('description', 128)->nullable();
            $table->string('type', 128);
            $table->string('url', 128)->nullable();
            $table->string('reference', 128)->nullable();
            $table->text('config')->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('priority')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_igniter_pages_menu_items');
    }
};
