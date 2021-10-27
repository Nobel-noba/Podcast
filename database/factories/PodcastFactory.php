<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PodcastFactory extends Factory
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
            'channel_id'=>rand(1,10),
            'picture_path'=>$this->faker->sentence(),
            'title'=> $this->faker->word(),
            'description'=>$this->faker->paragraph(),
            'podcast_path'=>$this->faker->sentence()
        ];
    }
}
