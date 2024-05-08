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
        Schema::create('ti_activities', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->string('log_name', 128)->nullable();
            $table->text('properties')->nullable();
            $table->integer('subject_id')->nullable();
            $table->string('subject_type', 128)->nullable();
            $table->integer('causer_id')->nullable();
            $table->string('causer_type', 128)->nullable();
            $table->string('type', 128)->nullable();
            $table->string('user_type', 128)->nullable();
            $table->timestamps();
            $table->softDeletes(); // This adds 'deleted_at' column.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_activities');
    }
};
