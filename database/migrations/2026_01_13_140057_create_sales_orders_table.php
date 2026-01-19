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
        Schema::create('sales_orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('email');
            $table->string('phone_number');
            $table->string('first_name');
            $table->string('last_name');
            //$table->string('order_number')->unique();
            $table->string('status')->default('pending');
            $table->decimal('total_amount', 10, 2);
            $table->decimal('shipping_cost', 10, 2)->default(0);
            $table->decimal('discount_amount', 10, 2)->default(0);
            $table->string('delivery_method');
            $table->string('payment_method');
            $table->string('payment_status')->default('unpaid');
            $table->string('pickup_location')->nullable();
           
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            // shipping other address
            $table->boolean('shipping_other')->default(0);
            $table->string('first_name_other')->nullable();
            $table->string('last_name_other')->nullable();
            $table->string('country_other')->nullable();
            $table->string('address_other')->nullable();
            $table->string('postal_code_other')->nullable();
            $table->string('city_other')->nullable();
            $table->text('shipping_address')->nullable();
            $table->text('billing_address')->nullable();
            

            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_orders');
    }
};
