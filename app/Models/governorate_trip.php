<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Governorate_Trip extends Model
{
    use HasFactory;

    public function trip()
    {
      return $this->belongsTo(Trip::class);
    }
    public function governorate()
    {
      return $this->belongsTo(Governorate::class);
    }
}
