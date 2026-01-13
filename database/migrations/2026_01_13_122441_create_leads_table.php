<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();

            $table->integer('sr_no')->nullable();
            $table->string('phone_number', 20)->nullable();

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();

            $table->string('state')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code', 20)->nullable();

            $table->integer('age')->nullable();
            $table->string('dob')->nullable();

            $table->string('lead_type')->nullable();

            // New fields
            $table->string('status')->nullable();     // e.g., New, Contacted, Converted
            $table->string('owner')->nullable();      // e.g., Agent or User name
            $table->string('category')->nullable();   // e.g., Sweepstakes, Referral
            $table->text('notes')->nullable();       // Extra notes about the lead

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
