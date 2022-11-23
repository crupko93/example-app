<?php

namespace Database\Factories;

use App\Models\Actors;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActorsFactory extends Factory
{
    protected $model = Actors::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
