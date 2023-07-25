<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    use HasFactory;
    // Por que a função de getdate(weekday) vai trazer 0 para domingo e 6 para sabado
    protected $diasDaSemanaText = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
    protected $fillable = ['id', 'user_id', 'nome', 'ordem', 'quadrante', 'isConcluido', 'diasDaSemana', 'dataLimite'];
}
