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
        Schema::create('ti_mail_layouts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->tinyInteger('status')->default(0);
            $table->string('code', 128);
            $table->text('layout')->nullable();
            $table->text('plain_layout')->nullable();
            $table->text('layout_css')->nullable();
            $table->tinyInteger('is_locked')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_mail_layouts');
    }
};
