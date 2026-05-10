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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            // Struktur Bilingual (Indonesia & Inggris)
            $table->string('name_id');
            $table->string('name_en');
            $table->text('description_id')->nullable();
            $table->text('description_en')->nullable();
            
            // Data umum
            $table->string('location')->nullable();
            $table->string('branch_url')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
