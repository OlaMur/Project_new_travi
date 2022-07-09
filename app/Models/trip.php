<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
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
  return $this->hasOne(Daily_Program::class);
}
public function governorate()
{
  return $this->hasMany(Governorate_Trip::class);
}
public function state()
{
  return $this->hasMany(State_Trip::class);
}
public function area()
{
  return $this->hasMany(Area_Trip::class);
}
public function activity()
{
  return $this->hasMany(Activity_Trip::class);
}


}