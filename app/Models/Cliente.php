<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    
    protected $primaryKey = 'idCliente';

    protected $fillable = [
        'nomeCliente',
        'telefoneCliente',
        'enderecoCliente',
        'cidadeCliente',
        'estadoCliente',
        'cepCliente'
    ];

    public function tipo_usuario()
    {
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }
}
