<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Futebol extends Model
{
    protected $fillable = [
        'nome_do_time',
        'capitao', 
        'pontuacao',
        'treinador_id' //acrescentar treinador_id para continuar com o processo de relacionamento entre entidades
    ];

    public function treinador()
    {
        return $this->belongsTo(Treinador::class, 'treinador_id'); // Definindo que o Treinador ID é referente ao treinador, fazer essa etapa quando estiver fazendo as relações
    }
}
