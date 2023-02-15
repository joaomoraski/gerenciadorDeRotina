<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remedio extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'user_id', 'funcionalidaed', 'quantidadeTomar', 'estoque', 'isReceitado', 'quantasVezes', 'intervalo', 'tempoEmDias'];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
