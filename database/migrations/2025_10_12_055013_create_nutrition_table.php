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
        Schema::create('nutrition', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('energy')->nullable();
            $table->string('fat')->nullable();
            $table->string('saturates')->nullable();
            $table->string('carbohydrate')->nullable();
            $table->string('sugars')->nullable();
            // $table->string('fibre')->nullable();
            $table->string('protein')->nullable();
            $table->string('salt')->nullable();
            // $table->string('sodium')->nullable();
            $table->longText('disclaimer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutrition');
    }
};
