<?php

namespace App\Models\vendor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorInformation extends Model
{
    use HasFactory;
    protected $table="vendor_information";
    protected $fillable=[
        'add_listing_id',
        'vendor_name',
        'vendor_description',
        'vendor_offer',
        'vendor_discount',
        'vendor_price',
        'vendor_image',
    ];

    protected $casts=[
        'add_listing_id' => 'array',
        'vendor_name' => 'array',
        'vendor_description' => 'array',
        'vendor_offer' => 'array',
        'vendor_discount' => 'array',
        'vendor_price' => 'array',
        'vendor_image' => 'array',
    ];
}

