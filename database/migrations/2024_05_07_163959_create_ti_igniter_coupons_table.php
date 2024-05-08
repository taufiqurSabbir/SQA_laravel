<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ti_igniter_coupons', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->string('code', 128);
            $table->char('type', 1);
            $table->decimal('discount', 15, 4)->nullable();
            $table->decimal('min_total', 15, 4)->nullable();
            $table->integer('redemptions')->default(0);
            $table->integer('customer_redemptions')->default(0);
            $table->text('description')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->char('validity', 15)->nullable();
            $table->date('fixed_date')->nullable();
            $table->time('fixed_from_time')->nullable();
            $table->time('fixed_to_time')->nullable();
            $table->date('period_start_date')->nullable();
            $table->date('period_end_date')->nullable();
            $table->String('recurring_every', 35)->nullable();
            $table->time('recurring_from_time')->nullable();
            $table->time('recurring_to_time')->nullable();
            $table->text('order_restriction')->nullable();
            $table->enum('apply_coupon_on', ['whole_cart', 'menu_items', 'delivery_fee'])->default('whole_cart');
            $table->tinyInteger('auto_apply')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_igniter_coupons');
    }
};
