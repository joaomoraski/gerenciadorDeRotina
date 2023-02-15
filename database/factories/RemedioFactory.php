<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RemedioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'user_id' => 1,
            'funcionalidade' => $this->faker->text,
            'quantidadeTomar' => $this->faker->numberBetween(),
            'estoque' => $this->faker->numberBetween(),
            'isReceitado' => false,
            'quantasVezes' => 4,
            'intervalo' => 4,
            'tempoEmDias' => 5
        ];
    }
}
