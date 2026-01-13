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
            $table->string('phone', 20)->nullable()->after('email');
            $table->string('status')->default('active')->after('phone'); // e.g., active, inactive
            $table->string('department')->nullable()->after('status');   // e.g., Sales, Support
            $table->string('role')->default('user')->after('department'); // e.g., admin, user
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
                     $table->dropColumn(['phone', 'status', 'department', 'role']);
        });
    }
};
