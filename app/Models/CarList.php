<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarList extends Model
{
    protected $fillable = [
        'carname',
        'brandname',
        'colors',
    ];
}
