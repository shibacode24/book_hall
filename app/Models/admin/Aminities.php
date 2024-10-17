<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aminities extends Model
{
    use HasFactory;
    protected $table="aminities";
    protected $fillable=[
        'aminities'
    ];
}
