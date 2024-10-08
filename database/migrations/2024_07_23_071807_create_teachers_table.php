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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('title_id')->nullable();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->foreignId('province_id')->nullable();
            $table->timestamps();    
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
