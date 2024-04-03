<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauce extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'name',
        'manufacturer',
        'description',
        'mainPepper',
        'imageUrl',
        'heat', 
        'likes', 
        'dislikes'
    ];

    protected $casts = [
        'userLiked' => 'array', 
        'userDisliked' => 'array'
    ];
}
