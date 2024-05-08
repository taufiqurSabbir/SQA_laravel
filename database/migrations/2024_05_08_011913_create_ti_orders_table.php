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
        Schema::create('ti_orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->String('customer_id')->nullable();
            $table->string('first_name', 128);
            $table->string('last_name', 128);
            $table->string('email', 96);
            $table->string('telephone', 128);
            $table->String('location_id');
            $table->String('address_id')->nullable();
            $table->text('cart');
            $table->integer('total_items');
            $table->text('comment')->nullable();
            $table->string('payment', 128);
            $table->string('order_type', 128);
            $table->time('order_time');
            $table->date('order_date');
            $table->decimal('order_total', 15, 4)->nullable();
            $table->integer('status_id');
            $table->string('ip_address', 40);
            $table->string('user_agent', 128);
            $table->integer('assignee_id')->nullable();
            $table->String('assignee_group_id')->nullable();
            $table->string('invoice_prefix', 128)->nullable();
            $table->datetime('invoice_date')->nullable();
            $table->string('hash', 40)->nullable();
            $table->tinyInteger('processed')->nullable();
            $table->datetime('status_updated_at')->nullable();
            $table->datetime('assignee_updated_at')->nullable();
            $table->tinyInteger('order_time_is_asap')->default(0);
            $table->text('delivery_comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_orders');
    }
};
