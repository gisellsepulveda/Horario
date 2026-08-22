<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DescripcionActividad extends Model
{
    protected $table = 'descripcion_actividades'; // ✅ Nombre real de la tabla

    protected $fillable = ['actividad_catalogo_id', 'descripcion', 'grupo'];

    public function actividadCatalogo()
    {
        return $this->belongsTo(ActividadCatalogo::class);
    }
}


