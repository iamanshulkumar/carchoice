<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderImage extends Model
{
    protected $fillable = [
        'mainbannerimg',
        'checkonroadimg',
        'mobileimages',
    ];
}
