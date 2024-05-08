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
        Schema::create('ti_igniter_reviews', function (Blueprint $table) {
            $table->bigIncrements('review_id');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('sale_id')->nullable();
            $table->string('sale_type', 32)->default('');
            $table->string('author', 128)->nullable();
            $table->unsignedBigInteger('location_id')->nullable();
            $table->integer('quality');
            $table->integer('delivery');
            $table->integer('service');
            $table->text('review_text')->nullable();
            $table->tinyInteger('review_status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_igniter_reviews');
    }
};
