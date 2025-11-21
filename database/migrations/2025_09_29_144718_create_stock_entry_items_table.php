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
        Schema::create('stock_entry_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('stock_entry_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->string('variant')->nullable();
            $table->integer('quantity')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_entry_items');
    }
};
