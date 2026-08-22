<?php

namespace App\Http\Controllers;

use App\Models\DescripcionActividad;
use Illuminate\Http\Request;

class DescripcionActividadController extends Controller
{
    public function getDescripciones($actividadId)
    {
        return DescripcionActividad::where('actividad_catalogo_id', $actividadId)->get();
    }
}

