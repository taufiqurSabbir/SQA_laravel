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
        Schema::create('ti_currencies', function (Blueprint $table) {
            $table->id();
            $table->string('currency_name', 128);
            $table->string('currency_code', 3);
            $table->string('currency_symbol', 3);
            $table->decimal('currency_rate', 15, 8);
            $table->tinyInteger('symbol_position')->nullable();
            $table->char('thousand_sign', 1);
            $table->char('decimal_sign', 1);
            $table->char('decimal_position', 1);
            $table->string('iso_alpha2', 2)->nullable();
            $table->string('iso_alpha3', 3)->nullable();
            $table->integer('iso_numeric')->nullable();
            $table->integer('currency_status')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_currencies');
    }
};
