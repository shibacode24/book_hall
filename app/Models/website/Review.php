<?php

namespace App\Models\website;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = "review";
    protected $fillable=[
        'user_id',
        'listing_id',
        'rating',
        'review',
    ];

    public function user_name()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function usernameforreview()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
