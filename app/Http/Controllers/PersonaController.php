<?php

namespace App\Http\Controllers;

use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        // Trae todas las personas ordenadas por hora de entrada descendente
        $personas = Persona::orderBy('hora_entrada', 'desc')->get();
        
        return view('admin.personas.index', compact('personas'));
    }
}
