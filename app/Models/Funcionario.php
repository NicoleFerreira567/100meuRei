<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = 'funcionario';

    protected $primaryKey = 'idFuncionario';

    protected $fillable = [
        'nomeFuncionario',
        'dataNascFuncionario',
        'foneFuncionario',
        'enderecoFuncionario',
        'cidadeFuncionario',
        'estadoFuncionario',
        'cepFuncionario',
        'dataContrataçãoFuncionario',
        'cargoFuncionario',
        'salarioFuncionario',
        'tipo_funcionario',
        'statusFuncionario',
      
    ];
    
    public function tipo_usuario() {
        
       return $this->morphOne(Usuario::class, 'tipo_usuario');
    }
}
