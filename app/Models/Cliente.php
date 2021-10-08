<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['razaosocial', 'nomefantasia', 'cnpj', 'endereco', 'email', 'telefone', 'nomeresponsavel', 'cpf', 'celular'];
}
