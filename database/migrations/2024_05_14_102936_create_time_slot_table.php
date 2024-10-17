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
        Schema::create('time_slot', function (Blueprint $table) {
            $table->id();
            $table->string('listing_id');
            $table->string('category_id');
            $table->string('from_time_slot');
            $table->string('to_time_slot');
            $table->timestamps();
        });
    }
    
    
    
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_slot');
    }
};
