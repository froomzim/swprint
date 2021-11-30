<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impressoes extends Model
{
    protected $table = 'impressoes';

    protected $fillable = [
        'imprimir',
        'conteudo'
    ];
}
