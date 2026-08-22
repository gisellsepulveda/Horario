<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\Actividad; // Modelo correcto para Lista de Actividades

class HorarioController extends Controller
{
    // Mostrar el horario
    public function index()
    {
        $horarios = Horario::with('actividadRelacionada')->get()->groupBy('dia');
        return view('horarios.index', compact('horarios'));
    }

    // Mostrar formulario para crear manualmente
    public function create()
    {
        $actividades = Actividad::all();
        return view('horarios.create', compact('actividades'));
    }

    // Guardar una actividad manual
    public function store(Request $request)
    {
        $request->validate([
            'dia' => 'required',
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'actividad_id' => 'required|exists:actividades,id',
        ]);

        $actividad = Actividad::find($request->actividad_id);

        Horario::create([
            'dia' => $request->dia,
            'hora_inicio' => $request->hora_inicio,
            'hora_fin' => $request->hora_fin,
            'actividad_id' => $actividad->id,
            'actividad' => $actividad->descripcion,
            'grupo' => $actividad->grupo,
        ]);

        return redirect()->route('horarios.index')->with('success', 'Actividad agregada al horario.');
    }

    // Generar actividades automáticas al azar
    public function generarHorarioAutomatico()
    {
        $actividades = Actividad::all();

        if ($actividades->count() == 0) {
            return redirect()->route('horarios.index')->with('error', 'No hay actividades para generar horario.');
        }

        $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
        $bloques = [
            ['06:00', '06:45'], ['06:45', '07:30'], ['07:30', '08:15'],
            ['08:15', '09:00'], ['09:00', '09:45'], ['09:45', '10:30'],
            ['10:30', '11:15'], ['11:15', '12:00'], ['12:00', '12:45']
        ];

        foreach ($actividades as $actividad) {
            $randomDia = $dias[array_rand($dias)];
            $randomBloque = $bloques[array_rand($bloques)];

            Horario::create([
                'dia' => $randomDia,
                'hora_inicio' => $randomBloque[0],
                'hora_fin' => $randomBloque[1],
                'actividad_id' => $actividad->id,
                'actividad' => $actividad->descripcion,
                'grupo' => $actividad->grupo,
            ]);
        }

        return redirect()->route('horarios.index')->with('success', 'Horario generado correctamente.');
    }

    public function limpiarYGenerar()
    {
        Horario::truncate();
        return $this->generarHorarioAutomatico();
    }
}