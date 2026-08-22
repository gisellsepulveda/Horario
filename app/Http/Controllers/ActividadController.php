<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;
use App\Models\Docente;
use App\Models\ActividadCatalogo;

class ActividadController extends Controller
{
    public function index()
{
    $actividades = Actividad::with('docente')->get(); // Relación con el docente
    return view('actividades.index', compact('actividades'));
}


public function create()
{
    $docentes = Docente::all();
    $catalogo = ActividadCatalogo::all();

    return view('actividades.create', compact('docentes', 'catalogo'));
}


public function store(Request $request)
{
    $request->validate([
        'docente_id'       => 'required|exists:docentes,id',
        'nombre_actividad' => 'required|string',
        'descripcion'      => 'required|string',
        'grupo'            => 'nullable|string',
        'horas' => 'required|integer|min:1|max:3',
        'misional'         => 'nullable|string',
    ]);

    $docente = Docente::find($request->docente_id);

Actividad::create([
    'docente_id' => $request->docente_id,
    'nombre_actividad' => $request->nombre_actividad,
    'descripcion' => $request->descripcion,
    'grupo' => $request->grupo,
    'horas' => $request->horas,
    'responsable_seguimiento' => $docente->nombres . ' ' . $docente->apellidos,
    'misional' => $request->misional,
]);


    return redirect()->route('actividades.index')->with('success', 'Actividad registrada correctamente.');
}



    public function edit(Actividad $actividad)
    {
        return view('actividades.edit', compact('actividad'));
    }

    public function update(Request $request, Actividad $actividad)
    {
        $request->validate([
            'nombre_actividad' => 'required|string',
            'misional' => 'nullable|string',
            'descripcion' => 'nullable|string',
            'horas' => 'required|integer|min:1|max:3',
            'responsable_seguimiento' => 'nullable|string',
        ]);

        $actividad->update($request->all());
        return redirect()->route('actividades.index')->with('success', 'Actividad actualizada correctamente.');
    }

    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return redirect()->route('actividades.index')->with('success', 'Actividad eliminada correctamente.');
    }
    public function seguimiento()
    {
        // Trae las primeras 20 actividades reales (que ves en tu Listado con horas)
        $actividades = \App\Models\Actividad::take(20)->get();
    
        return view('seguimiento_de_actividades', compact('actividades'));
    }
    

}