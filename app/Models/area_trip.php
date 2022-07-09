<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class area_trip extends Model
{
    use HasFactory;

    public function trip()
    {
      return $this->belongsTo(trip::class);
    }
    public function area()
    {
      return $this->belongsTo(area::class);
    }
}
