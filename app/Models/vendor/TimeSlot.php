<?php

namespace App\Models\vendor;

use App\Models\admin\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;
    protected $table="time_slot";
    protected $fillable=[
        'listing_id',
        'category_id',
        'from_time_slot',
        'to_time_slot',
    ];

    public function wedding_venue_name()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
