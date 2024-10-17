<?php

namespace App\Models\vendor;

use App\Models\admin\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingAmenity extends Model
{
    use HasFactory;
    protected $table="listing_amenities";
    protected $fillable=[
        'listing_id',
        'venue_name',
        'amenity',
        'capacity',
        'price',
    ];

    public function WeddingvenueId()
{
    return $this->belongsTo(Category::class, 'category_id');
}

public function category_name()
{
    return $this->hasOne(Category::class, 'id' , 'amenity');
}

}
