<?php

namespace App\Models\admin;

use App\Models\vendor\ListingAmenity;
use App\Models\vendor\TimeSlot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table="category";
    protected $fillable=[
        'category'
    ];

    public function listing_amenities()
{
    return $this->hasMany(TimeSlot::class, 'category_id', 'id');
}

public function category_name()
    {
        return $this->belongsTo(ListingAmenity::class, 'category_id','id');
    }

}
