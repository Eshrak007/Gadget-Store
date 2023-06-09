<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apitest extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'brand',
        'description',
        'price',
        'rating',
        'thumbnail'
    ];
}
