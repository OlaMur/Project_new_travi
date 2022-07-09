<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image1',
        'image2',
        'image3'
];
    public function area_trip()
{
  return $this->hasMany(area_trip::class);
}
}
