<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    use HasFactory;

// public function trip()
// {
//   return $this->hasMany(trip::class);

// }
public function governorate_trip()
{
  return $this->hasMany(Governorate_Trip::class);
}
}