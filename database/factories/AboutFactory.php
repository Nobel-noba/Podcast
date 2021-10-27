<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone_number'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->email(),
            'location'=>$this->faker->sentence(),
            'detail'=>$this->faker->paragraph()
        ];
    }
}
