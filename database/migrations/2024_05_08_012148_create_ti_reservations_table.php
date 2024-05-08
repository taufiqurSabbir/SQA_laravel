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
        Schema::create('ti_reservations', function (Blueprint $table) {
            $table->id();
            $table->string('location_id');
            $table->string('table_id');
            $table->integer('guest_num');
            $table->integer('occasion_id')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('first_name', 128);
            $table->string('last_name', 128);
            $table->string('email', 96);
            $table->string('telephone', 128);
            $table->text('comment')->nullable();
            $table->time('reserve_time');
            $table->date('reserve_date');
            $table->integer('assignee_id')->nullable();
            $table->string('assignee_group_id')->nullable();
            $table->tinyInteger('notify')->nullable();
            $table->string('ip_address', 40);
            $table->string('user_agent', 128);
            $table->tinyInteger('status_id');
            $table->string('hash', 40)->nullable();
            $table->integer('duration')->nullable();
            $table->tinyInteger('processed')->nullable();
            $table->datetime('status_updated_at')->nullable();
            $table->datetime('assignee_updated_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_reservations');
    }
};
