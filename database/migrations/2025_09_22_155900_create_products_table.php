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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->decimal('discounted_price', 10, 2);
            $table->decimal('original_price', 10, 2)->nullable();
            $table->decimal('tax', 10, 2)->nullable();
            $table->decimal('cost_per_item', 10, 2)->nullable();
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->integer('quantity')->default(0);
            $table->boolean('auto_update_quantity')->default(false);
            $table->boolean('out_of_stock')->default(false);
            $table->boolean('track_quantity')->default(false);
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('supplier_id')->unsigned()->nullable();
            $table->longText('tags')->nullable();
            $table->string('status')->default('draft'); // draft, active, archived
            $table->integer('views')->default(0);
            $table->integer('sales')->default(0);
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('slug')->unique();
            $table->boolean('is_digital')->default(false);
            $table->string('digital_file')->nullable();
            $table->boolean('deleted')->default(false);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
