<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title'=>$this->faker->name(),
            'body'=>$this->faker->paragraph(),
            'user_id'=>rand(1,10),
            'cover_picture'=> $this->faker->sentence()
        ];
    }
}
