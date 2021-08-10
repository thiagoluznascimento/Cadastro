<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite_movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','user_id','title','release_year','director'
    ];

}
