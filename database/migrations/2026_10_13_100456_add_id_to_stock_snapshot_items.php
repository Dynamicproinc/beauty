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
        Schema::table('stock_snapshot_items', function (Blueprint $table) {
            $table->bigInteger('product_id'); // Add the 'id' column as the first column and set it as primary key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stock_snapshot_items', function (Blueprint $table) {
            //
        });
    }
};
