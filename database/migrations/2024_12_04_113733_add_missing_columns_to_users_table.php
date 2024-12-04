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
            $table->string('role')->default('user'); // Add 'role' column with default value 'user'
            $table->date('birth_date')->nullable(); // Add 'birth_date' column as a nullable date
            $table->bigInteger('hour_filter')->nullable(); // Add 'hour_filter' column as a nullable big integer
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'birth_date', 'hour_filter']); // Drop the added columns
        });
    }
};
