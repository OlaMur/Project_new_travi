<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'type',
        'price',
        'start_date',
        'expiry_date',
        'start_trip',
        'end_trip',
        'rest',
        'total',
        'image',
        'reiteration',
        'coutinent',
        'name_team',  
        'about',
    ];

public function user()
{
  return $this->belongsTo(User::class);
  
}
// public function governorate()
// {
//   return $this->belongsTo( governorate::class);
// }
public function daily_program()
{
  return $this->hasOne(daily_program::class);
}
public function governorate()
{
  return $this->hasMany(governorate_trip::class);
}
public function state()
{
  return $this->hasMany(state_trip::class);
}
public function area()
{
  return $this->hasMany(area_trip::class);
}
public function activity()
{
  return $this->hasMany(activity_trip::class);
}


}