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
        Schema::table('users', function (Blueprint $table) {
            $table->string('google_id')->nullable()->after('password');
            $table->string('google_token')->nullable()->after('google_id');
            $table->string('avatar')->nullable()->after('google_token');
            $table->string('last_name')->nullable()->after('name');
            $table->string('admin_role')->nullable();
            $table->boolean('is_admin')->default(false)->after('admin_role');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
