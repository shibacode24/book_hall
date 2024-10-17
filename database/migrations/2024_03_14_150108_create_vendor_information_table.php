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
        Schema::create('vendor_information', function (Blueprint $table) {
            $table->id();
            $table->string('add_listing_id');
            $table->string('vendor_name');
            $table->string('vendor_description');
            $table->string('vendor_price');
            $table->string('vendor_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor_information');
    }
};
