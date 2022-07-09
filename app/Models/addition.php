<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addition extends Model
{
    use HasFactory;
    protected $fillable = [
        'about',
    ];
}
