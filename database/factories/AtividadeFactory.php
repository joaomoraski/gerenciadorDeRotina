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
            'dataLimite' => $this->faker->dateTimeBetween('now', '+30 days')
        ];
    }

    public function gerarDiasSemana() :string
    {
        $diasSemana = '';
        switch ($this->faker->numberBetween(1,5)) {
            case 1:
                $diasSemana = 'Segunda-feira,Terça-feira,Quinta-feira,Sábado';
                break;
            case 2:
                $diasSemana = 'Terça-feira,Quarta-feira,Sexta-feira,Sábado';
                break;
            case 3:
                $diasSemana = 'Segunda-feira,Quarta-feira,Sexta-feira';
                break;
            case 4:
                $diasSemana = 'Quarta-feira,Quinta-feira,Sexta-feira';
                break;
            case 5:
                $diasSemana = 'Segunda-feira,Sábado';
                break;
        }
        return $diasSemana;
    }
}
