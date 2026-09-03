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
        Schema::create('reward_wallet_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reward_wallet_id')
                ->constrained('reward_wallets')
                ->cascadeOnDelete();
                $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->decimal('amount', 10, 2);
            $table->string('type'); // credit or debit
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reward_wallet_transactions');
    }
};
