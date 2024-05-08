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
        Schema::create('ti_tables', function (Blueprint $table) {
            $table->bigIncrements('table_id');
            $table->string('table_name', 128);
            $table->integer('min_capacity');
            $table->integer('max_capacity');
            $table->tinyInteger('table_status');
            $table->integer('extra_capacity')->default(0);
            $table->tinyInteger('is_joinable')->default(1);
            $table->integer('priority')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_tables');
    }
};
