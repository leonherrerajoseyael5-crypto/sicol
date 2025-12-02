<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'titulo',
        'categoria',
        'descripcion',
        'estado',
        'latitud',
        'longitud',
        'foto',
        'ia_resultado',
    ];
}
