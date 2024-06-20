<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
   
    protected $table = 'admin';

    protected $primayKey = 'idAdmin';

    protected $fillable = [
     
        'nome',
        'email',
         'senha'
    ];
  

    public fu
}
