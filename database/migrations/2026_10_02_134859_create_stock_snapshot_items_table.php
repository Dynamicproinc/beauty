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
        Schema::create('stock_snapshot_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stock_snapshot_id')->constrained('stock_snapshots')->onDelete('cascade');
             $table->string('name');
            $table->string('sku')->nullable();
            $table->string('brand')->nullable();
            $table->text('url')->nullable();
            $table->string('unit_of_measure')->nullable();
            $table->decimal('unit_price', 12, 2)->nullable();
            $table->decimal('retail_price', 12, 2)->nullable();
            $table->string('special_form_name')->nullable();
            $table->decimal('reference_price', 12, 2)->nullable();
            $table->date('reference_price_date')->nullable();
            $table->decimal('base_price', 12, 2)->nullable();
            $table->date('base_price_date')->nullable();
            $table->timestamp('date_added')->nullable();
            $table->string('barcode', 50)->nullable();
            $table->string('availability')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_snapshot_items');
    }
};
