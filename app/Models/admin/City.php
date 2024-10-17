<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table="city";
    protected $fillable=[
        'city',
        'latitude',
        'longitude'
    ];
}
