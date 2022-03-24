<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\course;

class courseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = course::class; 
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //create a 5 digits random course name
            'name' => strtoupper($this->faker->lexify('?????')),
            // create a capacity number between 3 and 8
            'capacity' => rand(3, 8),
            'created_at'=> $this->faker->dateTime(),
            'updated_at'=> $this->faker->dateTime(),
        ];
    }
}
