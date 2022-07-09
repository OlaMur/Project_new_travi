<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;


    public function activity_trip()
{
  return $this->hasMany(Activity_Trip::class);
}

public function users(){
  return $this->belongsToMany(User::class,'activities_users');
}
}
