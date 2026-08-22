<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class DocenteController extends Controller
{
    public function index()
    {
        $docentes = Docente::all();
        return view('docentes.index', compact('docentes'));
    }

    public function create()
    {
        return view('docentes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'apellidos' => 'required|string|max:255',
            'nombres' => 'required|string|max:255',
            'tarjeta_profesional' => 'nullable|string|max:255',
            'cc' => 'required|string|max:255|unique:docentes,cc',
            'facultad_departamento' => 'required|string|max:255',
            'unidad_academica' => 'required|string|max:255',
            'campus' => 'required|in:Barrancabermeja,Piedecuesta,Bucaramanga,Vélez',
            'tipo_vinculacion' => 'required|string|max:255',
            'escalafon_docente' => 'required|in:Auxiliar,Asistente,Asociado,Titular',
            'semestre_anio' => 'required|string|max:255',
            'direccion_residencia' => 'nullable|string|max:255',
            'telefono_fijo' => 'nullable|string|max:20',
            'numero_celular' => 'required|string|max:20',
            'correo_electronico' => 'required|email|max:255|unique:docentes,correo_electronico',
        ]);

        Docente::create($request->all());

        return redirect()->route('docentes.index')->with('success', 'Docente registrado exitosamente.');
    }

    public function edit(Docente $docente)
    {
        return view('docentes.edit', compact('docente'));
    }

    public function update(Request $request, Docente $docente)
    {
        $request->validate([
            'apellidos' => 'required|string|max:255',
            'nombres' => 'required|string|max:255',
            'tarjeta_profesional' => 'nullable|string|max:255',
            'cc' => "required|string|max:255|unique:docentes,cc,{$docente->id}",
            'facultad_departamento' => 'required|string|max:255',
            'unidad_academica' => 'required|string|max:255',
            'campus' => 'required|in:Barrancabermeja,Piedecuesta,Bucaramanga,Vélez',
            'tipo_vinculacion' => 'required|string|max:255',
             'escalafon_docente' => 'required|in:Auxiliar,Asistente,Asociado,Titular',
            'semestre_anio' => 'required|string|max:255',
            'direccion_residencia' => 'nullable|string|max:255',
            'telefono_fijo' => 'nullable|string|max:20',
            'numero_celular' => 'required|string|max:20',
            'correo_electronico' => "required|email|max:255|unique:docentes,correo_electronico,{$docente->id}",
        ]);

        $docente->update($request->all());

        return redirect()->route('docentes.index')->with('success', 'Docente actualizado exitosamente.');
    }

    public function destroy(Docente $docente)
    {
        $docente->delete();
        return redirect()->route('docentes.index')->with('success', 'Docente eliminado exitosamente.');
    }
}
