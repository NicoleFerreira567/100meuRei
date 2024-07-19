<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'usuarios';
    protected $primaryKey = 'idUsuario';
    protected $hidden = ['senhaUsuario',];
    protected $fillable = ['nomeUsuario', 'emailUsuario', 'senhaUsuario', 'tipo_usuario_id', 'tipo_usuario_type'];
    

    public function tipo_usuario()
    {
        return $this->morphTo('tipo_usuario', 'tipo_usuario_type', 'tipo_usuario_id');
    }
}
