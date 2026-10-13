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
        Schema::table('sales_orders', function (Blueprint $table) {
            $table->string('gls_location_id')->nullable();
            $table->string('gls_paketomat_details')->nullable();

            $table->string('gls_status')->nullable();
            $table->string('gls_parcel_number')->nullable();
            $table->string('gls_shipment_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('sales_orders', function (Blueprint $table) {
            $table->dropColumn([
                'gls_location_id',
                'gls_paketomat_details',
                'gls_status',
                'gls_parcel_number',
                'gls_shipment_id',
            ]);
        });
    }
};
