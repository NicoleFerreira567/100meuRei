<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    use HasFactory;

    protected $table = 'funcionarios';

    protected $primaryKey = 'idFuncionario';

    protected $fillable = [
        'nomeFuncionario',
        'dataNascimento',
        'foneFuncionario',
        'enderecoFuncionario',
        'cidadeFuncionario',
        'estadoFuncionario',
        'cepFuncionario',
        'dataContratação',
        'cargo',
        'salario',
        'tipofuncionario',
        'statusFuncionario',
        'statusAluno'
    ];
    
    public function tipo_usuario() {
        
       return $this->morphOne(Usuario::class, 'tipo_usuario');
    }
}
