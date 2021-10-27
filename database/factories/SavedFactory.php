<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SavedFactory extends Factory
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
            'user_id'=>rand(1,10),
            'blog_id'=>rand (1,100),
            'podcast_id'=> rand(1,100)
        ];
    }
}
