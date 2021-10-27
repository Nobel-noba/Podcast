<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChannelFactory extends Factory
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
            'channel_name'=>$this->faker->name(),
            'cover_photo'=>$this->faker->sentence(),
            'bio'=>$this->faker->paragraph()
        ];
    }
}
