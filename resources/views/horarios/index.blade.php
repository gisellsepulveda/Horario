@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-xl font-semibold mb-4">Horario Semanal</h2>

    <p class="text-sm text-gray-600 mb-2">Actividades generadas: {{ $horarios->flatten()->count() }}</p>

    <table class="table-auto border border-gray-400 w-full text-sm text-center">
        <thead class="bg-gray-200">
            <tr>
                <th class="border px-2 py-1">Hora</th>
                @foreach(['Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'] as $dia)
                    <th class="border px-2 py-1">{{ $dia }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @php
                $bloques = [
                    ['06:00', '06:45'], ['06:45', '07:30'], ['07:30', '08:15'],
                    ['08:15', '09:00'], ['09:00', '09:45'], ['09:45', '10:30'],
                    ['10:30', '11:15'], ['11:15', '12:00'], ['12:00', '12:45'],
                    ['12:45', '13:30'], ['13:30', '14:15'], ['14:15', '15:00'],
                    ['15:00', '15:45'], ['15:45', '16:30'], ['16:30', '17:15'],
                    ['17:15', '18:00'], ['18:00', '18:45'], ['18:45', '19:30'],
                    ['19:30', '20:15'], ['20:15', '20:45'],
                ];
                $colores = ['bg-green-200', 'bg-yellow-200', 'bg-orange-200', 'bg-blue-200', 'bg-pink-200', 'bg-purple-200'];
            @endphp

            @foreach($bloques as $bloque)
                <tr>
                    <td class="border px-2 py-1 font-semibold">{{ $bloque[0] }} - {{ $bloque[1] }}</td>
                    @foreach(['Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'] as $dia)
                        @php
                            $evento = $horarios->has($dia)
                                ? $horarios[$dia]->first(function($item) use ($bloque) {
                                    return substr($item->hora_inicio, 0, 5) === $bloque[0];
                                })
                                : null;
                        @endphp

                        <td class="border px-1 py-1 h-14 align-top">
                        @if($evento && $evento->actividadRelacionada)
    @php $color = $colores[$loop->iteration % count($colores)]; @endphp
    <div class="{{ $color }} p-1 rounded-md shadow text-xs leading-tight">
        <strong>{{ $evento->actividadRelacionada->descripcion }}</strong><br>
        <span class="italic">{{ $evento->actividadRelacionada->grupo }}</span>
    </div>
@endif



                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>


    <a href="{{ route('horarios.limpiarGenerar') }}"
   class="mt-4 inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
   Limpiar y Generar Horario Nuevo
</a>


</div>
@endsection