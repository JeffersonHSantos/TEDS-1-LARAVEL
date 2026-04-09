<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    
    // fillable é um array que define quais campos podem ser preenchidos em massa (mass assignment)
    protected $fillable = [
        'nome', 
        'semestres',
        'descricao'
        
    ];
    
}
