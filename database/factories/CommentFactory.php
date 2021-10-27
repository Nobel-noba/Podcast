<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
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
            'podcast_id'=> rand (1,100),
            'blog_id'=> rand (1,100),
            'message'=>$this->faker->paragraph()
        ];
    }
}
