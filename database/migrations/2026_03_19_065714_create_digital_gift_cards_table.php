<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Symfony\Component\String\s;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('digital_gift_cards', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->default();
            $table->integer('card_id');
            $table->string('email');
            $table->string('delivery_via')->default('online');
            $table->string('phone_number')->nullable();
            $table->string('from');
            $table->string('to');
            $table->string('Message');
            $table->string('uniq_code');
            $table->string('payment_status');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('digital_gift_cards');
    }
};
