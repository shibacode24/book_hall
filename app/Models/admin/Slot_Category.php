<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot_Category extends Model
{
    use HasFactory;
    protected $table="slot_category";
    protected $fillable=[
        'slot_category'
    ];
}
