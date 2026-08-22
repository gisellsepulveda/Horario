<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActividadCatalogo extends Model
{
    protected $table = 'actividades_catalogo';

    protected $fillable = [
        'nombre_actividad',
        'misional',
        'descripcion',
        'horas',
        'responsable',
    ];
}


