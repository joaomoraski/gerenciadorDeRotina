<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'user_id', 'nome', 'ordem', 'quadrante', 'isConcluido', 'diasDaSemana', 'dataLimite'];
}
