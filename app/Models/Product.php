<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nome', 'imagem', 'preco',
    ];

    protected $casts = [
        'preco' => 'float',
    ];
}
