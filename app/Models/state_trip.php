<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state_trip extends Model
{
    use HasFactory;
    public function trip()
    {
      return $this->belongsTo(trip::class);
    }
    public function state()
{
  return $this->belongsTo(state::class);
}

}
