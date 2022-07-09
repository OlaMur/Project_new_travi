<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity_trip extends Model
{
    use HasFactory;

    public function activity()
{
  return $this->belongsTo(activity::class);
}
public function trip()
{
  return $this->belongsTo(trip::class);
}
}
