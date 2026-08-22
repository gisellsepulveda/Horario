<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $fillable = [
        'apellidos', 'nombres', 'tarjeta_profesional', 'cc',
        'facultad_departamento', 'unidad_academica', 'campus',
        'tipo_vinculacion', 'escalafon_docente', 'semestre_anio',
        'direccion_residencia', 'telefono_fijo', 'numero_celular',
        'correo_electronico'
    ];

    public static function getCampusOptions()
    {
        return ['Barrancabermeja', 'Piedecuesta', 'Bucaramanga', 'Vélez'];
    }

    public static function getEscalafonOptions()
    {
        return ['Auxiliar', 'Asistente', 'Asociado', 'Titular'];
    }

    public function actividades()
{
    return $this->hasMany(Actividad::class);
}

}
