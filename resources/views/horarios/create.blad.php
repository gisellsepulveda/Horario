@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5">
    <h2 class="text-xl font-semibold mb-4">Agregar Actividad al Horario</h2>

    <form action="{{ route('horarios.store') }}" method="POST" class="bg-white shadow p-4 rounded">
        @csrf

        <div class="mb-4">
            <label>Día:</label>
            <select name="dia" class="w-full border rounded px-2 py-1">
                @foreach(['Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'] as $dia)
                    <option value="{{ $dia }}">{{ $dia }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label>Hora de inicio:</label>
            <input type="time" name="hora_inicio" class="w-full border rounded px-2 py-1">
        </div>

        <div class="mb-4">
            <label>Hora de fin:</label>
            <input type="time" name="hora_fin" class="w-full border rounded px-2 py-1">
        </div>

        <div class="mb-4">
            <label>Actividad:</label>
            <input type="text" name="actividad" class="w-full border rounded px-2 py-1">
        </div>

        <div class="mb-4">
            <label>Grupo/Aula:</label>
            <input type="text" name="grupo" class="w-full border rounded px-2 py-1">
        </div>

        <div class="mb-4">
            <label>Tipo de jornada:</label>
            <select name="tipo" class="w-full border rounded px-2 py-1">
                <option value="Mañana">Mañana</option>
                <option value="Tarde">Tarde</option>
                <option value="Noche">Noche</option>
            </select>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Guardar</button>
    </form>
</div>
@endsection