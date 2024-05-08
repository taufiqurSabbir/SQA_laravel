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
        Schema::create('ti_igniter_coupons_histories', function (Blueprint $table) {
            $table->id();
            $table->string('code', 15);
            $table->decimal('min_total', 15, 4)->nullable();
            $table->decimal('amount', 15, 4)->nullable();
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_igniter_coupons_histories');
    }
};
