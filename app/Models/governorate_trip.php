<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class governorate_trip extends Model
{
    use HasFactory;

    public function trip()
    {
      return $this->belongsTo(trip::class);
    }
    public function governorate()
    {
      return $this->belongsTo(governorate::class);
    }
}
