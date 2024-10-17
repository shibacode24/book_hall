<?php

namespace App\Models\vendor;

use App\Models\admin\Category;
use App\Models\admin\City;
use App\Models\website\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddListing extends Model
{
    use HasFactory;
    protected $table = "add_listing";
    protected $fillable = [
        'user_id',
        'name',
        'contact_no',
        'address',
        'email',
        'website_link',
        'facebook_link',
        'instagram_link',
        'linkedin_link',
        'youtube_link',
        'twitter_link',
        'threads_link',
        'amenities_for_booking',
        'google_map_link',
        'capacity',
        'from_time_slot',
        'to_time_slot',
        'description',
        'banner_image',
        'front_page_image',
        'category_id',
        'amenities',
        'contact_person_name',
        'contact_person_number',
        'location_city',
        'location_address',
        'price',
        'show_price',
        'other_city'

    ];

    protected $casts = [
        'amenities' => 'array',
        'category_id' => 'array',
        'amenities_for_booking' => 'array',
        'banner_image' => 'array',
        'capacity' => 'array',
        'from_time_slot' => 'array',
        'to_time_slot' => 'array',
        'price' => 'array',
    ];

    public function city_name()
    {
        return $this->hasOne(City::class,'id','location_city');
    }
    public function category_name()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class,'listing_id','id');
    }

    

    // public function WeddingVenueName()
    // {
    //     return $this->hasMany(ListingAmenity::class,'listing_id','id');
    // }

    public function getListingReviewAttribute()
{
    $reviews = Review::where('listing_id', $this->id)->get(); // Fetching all reviews for the listing
    $review_count = $reviews->count(); // Count of all reviews
    
    $totalRating = 0;
    $averageRating = 0;

    if ($review_count > 0) { // Check if there are reviews
        foreach ($reviews as $review) {
            $totalRating += $review->rating;
        }
        $averageRating = $totalRating / $review_count;
    }

    return (object) [
        'average_rating' => $averageRating,
        'number_of_reviews' => $review_count
    ];
}

public function getWeddingVenueNameAttribute()
{
    $wedding_venue = ListingAmenity::
    where('listing_id', $this->id)->pluck('amenity');
    return $wedding_venue;
}

public function getPriceAttribute()
{
    $price = ListingAmenity::
    where('listing_id', $this->id)->pluck('price')->toArray();
    return $price;
}


// public function getWeddingVenuePriceAttribute()
// {
//     $wedding_venue_price = ListingAmenity::where('listing_id', $this->id)->pluck('price');
   
//     return $wedding_venue_price;
// }



}
