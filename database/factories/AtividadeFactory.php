<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AtividadeFactory extends Factory
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
            'nome' => $this->faker->firstName,
            'quadrante' => $this->faker->numberBetween(1,4),
            'isConcluido' => $this->faker->boolean,
            'diasDaSemana' => $this->gerarDiasSemana(),
        ];
    }

    public function gerarDiasSemana() :string
    {
        $diasSemana = '';
        switch ($this->faker->numberBetween(1,5)) {
            case 1:
                $diasSemana = '1,2,4,6';
                break;
            case 2:
                $diasSemana = '2,3,5,6';
                break;
            case 3:
                $diasSemana = '1,3,5';
                break;
            case 4:
                $diasSemana = '3,4,5';
                break;
            case 5:
                $diasSemana = '1,6';
                break;
        }
        return $diasSemana;
    }
}
