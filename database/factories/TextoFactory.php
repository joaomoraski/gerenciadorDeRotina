<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TextoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'content' => $this->faker->text()
        ];
    }
}
