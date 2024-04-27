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
        
        Schema::create('experiences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('candidate_id')->constrained('job_seekers')->cascadeOnDelete();
            $table->string('employment_type');
            $table->string('company_name');
            $table->string('location');
            $table->string('location_type');
            $table->string('start_date');
            $table->string('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
