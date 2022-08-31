<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    use HasFactory;

    protected $fillable = [ //campos preenchíveis da minha tabela
        'nome',
        'quantidade',
        'cor'
    ];

}
