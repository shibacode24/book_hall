<?php

namespace App\Models\website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor_registration extends Model
{
    use HasFactory;
    protected $table = 'vendor_registrations';

    protected $fillable = [
        'name',
        'state',
        'city',
        'category',
        'email',
        'phone_number',
        'password',
        'image',
        'alternate_phone_number',
        'star_count',
        'review_count',
        'address'
    ];
}
