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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('staff_id');
            $table->string('username', 32);
            $table->string('password', 128);
            $table->tinyInteger('super_user')->nullable();
            $table->string('reset_code', 128)->nullable();
            $table->dateTime('reset_time')->nullable();
            $table->string('activation_code', 128)->nullable();
            $table->tinyInteger('is_activated')->nullable();
            $table->dateTime('date_activated')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->dateTime('last_seen')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
