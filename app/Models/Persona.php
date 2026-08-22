<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    // Si tu tabla se llama 'personas' (plurales), no hace falta especificar $table
    // protected $table = 'personas';

    // Campos que pueden rellenarse en masa
    protected $fillable = [
        'nombre_completo',
        'hora_entrada',
        'hora_salida',
    ];

    // Si no quieres las columnas created_at / updated_at,
    // puedes desactivar timestamps:
    // public $timestamps = false;
}
