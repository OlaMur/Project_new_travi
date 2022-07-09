<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daily_program extends Model
{
    use HasFactory;
    protected $fillable =
     [
        'date_day_id',
    'timing_id',
    'trip_id',
    'place_id',
    'food_id'
];








}
