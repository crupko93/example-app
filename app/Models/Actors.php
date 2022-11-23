<?php

namespace App\Models;

use App\Models\Movies;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function movies()
    {
        return $this->belongsToMany(Movies::class, 'actors_movies', 'actors_id', 'movies_id');
    }
}
