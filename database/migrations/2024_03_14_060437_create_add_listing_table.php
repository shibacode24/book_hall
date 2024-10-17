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
        Schema::create('add_listing', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact_no');
            $table->string('address');
            $table->string('email');
            $table->string('website_link');
            $table->string('fecebook_link');
            $table->string('instagram_link');
            $table->string('linkedin_link');
            $table->string('youtute_link');
            $table->string('amenities_for_booking');
            $table->string('description');
            $table->string('banner_image');
            $table->string('front_page_image');
            $table->string('amenities');
            $table->string('contact_person_name');
            $table->string('contact_person_number');
            $table->string('vendor_name');
            $table->string('vendor_description');
            $table->string('vendor_price');
            $table->string('vendor_image');
            $table->string('location_city');
            $table->string('location_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_listing');
    }
};
