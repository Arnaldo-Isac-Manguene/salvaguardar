<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projecto extends Model
{
    use HasFactory;
    protected $table = "projecto";
    protected $fillable = [
        'name',
        'referencia',
        'namePIU',
        'estado',
        'descricao',
        'preparadoPor',
        'aprovadoPor',
        'contratoSubprojecto',
    ];
}
