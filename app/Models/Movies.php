<?php

namespace App\Models;

use App\Models\Actors;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year',
    ];

    public function actors()
    {
        return $this->belongsToMany(Actors::class, 'actors_movies', 'movies_id', 'actors_id');
    }
}
