<?php

namespace Database\Seeders;

use App\Models\Actors;
use App\Models\Movies;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $movies = Movies::factory(15)->create();

        Actors::factory(5)->create()->each(function($actor) use($movies) {
            $actor->movies()->attach($movies->random(3));
        });
        
    }
}
