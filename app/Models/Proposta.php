<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    protected $fillable = ['enderecoobra', 'valortotal', 'sinal', 'qtdparcela', 'valorparcelas', 'datainiciopagamento', 'datasparcelas', 'anexo', 'status', 'cliente_id'];
}
