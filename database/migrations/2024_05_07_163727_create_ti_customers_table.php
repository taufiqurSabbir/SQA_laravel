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
        Schema::create('ti_customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 128);
            $table->string('last_name', 128);
            $table->string('email', 96);
            $table->string('password', 128);
            $table->string('telephone', 32)->nullable();
            $table->tinyInteger('newsletter')->nullable();
            $table->string('ip_address', 40)->nullable();
            $table->tinyInteger('status');
            $table->string('reset_code', 128)->nullable();
            $table->dateTime('reset_time')->nullable();
            $table->string('activation_code', 128)->nullable();
            $table->string('remember_token', 128)->nullable();
            $table->tinyInteger('is_activated')->nullable();
            $table->dateTime('date_activated')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->dateTime('last_seen')->nullable();
            $table->text('last_location_area');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_customers');
    }
};
