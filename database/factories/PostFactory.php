<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Faker\Generator as Faker;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Post::class;
    public function definition()
    {
        return [
            'title' => $this->faker->text(40),
             'body' => $this->faker->text(200)
            
        ];
    }
}
