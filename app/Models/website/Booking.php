<?php

namespace App\Models\website;

use App\Models\admin\Category;
use App\Models\vendor\AddListing;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = "booking";
    protected $fillable=[
        'user_id',
        'listing_id',
        'date',
        'name',
        'contact_no',
        'time_slot',
        'amenities_for_booking',
        'guest',
        'remark',
        'status',
		 'price',
        'advance'
    ];

    public function city()
    {
    return $this->hasOne(AddListing::class,'id','listing_id');
    }

    public function getdateAttribute($value)
    {
        return date('Y-m-d',strtotime($value));
    }
	
	public function categoryname()
    {
    return $this->hasOne(Category::class,'id','amenities_for_booking');
    }
	  public function hall_name()
    {
    return $this->hasOne(AddListing::class,'id','listing_id');
    }
}

