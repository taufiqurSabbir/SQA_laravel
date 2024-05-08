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
        Schema::create('ti_igniter_frontend_banners', function (Blueprint $table) {
            $table->bigIncrements('banner_id');
            $table->string('name', 128);
            $table->char('type', 8);
            $table->string('click_url', 128)->nullable();
            $table->unsignedBigInteger('language_id');
            $table->string('alt_text', 128)->nullable();
            $table->text('image_code')->nullable();
            $table->text('custom_code')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_igniter_frontend_banners');
    }
};
