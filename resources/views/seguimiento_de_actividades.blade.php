@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-3 text-center"><strong>SEGUIMIENTO A LAS ACTIVIDADES</strong></h4>
    <p class="text-center">Indique las horas semanales (horas académicas de 45 minutos y el equivalente semestral de 60 minutos)</p>
    <p class="text-center">El semestre académico se establece en 23 semanas</p>

    <table class="table table-bordered text-center" style="font-size: 14px;">
        <thead>
            <tr>
                <th rowspan="2">Actividad</th>
                <th colspan="23">S E M A N A S</th>
                <th rowspan="2">Total</th>
            </tr>
            <tr>
                @for ($i = 1; $i <= 23; $i++)
                    <th>{{ $i }}</th>
                @endfor
            </tr>
        </thead>
        <tbody>
            @foreach ($actividades as $actividad)
                <tr>
                    <!-- Muestra el ID de la actividad -->
                    <td>{{ $actividad->id }}</td>

                    <!-- Muestra las horas de la actividad en cada una de las 23 semanas -->
                    @for ($i = 1; $i <= 23; $i++)
                        <td>{{ $actividad->horas ?? 0 }}</td>
                    @endfor

                    <!-- Total: horas semanales * 23 -->
                    <td>{{ number_format(($actividad->horas ?? 0) * 23, 1, ',', '.') }}</td>
                </tr>
            @endforeach

            <!-- Relleno de filas si hay menos de 20 actividades -->
            @for ($i = $actividades->count() + 1; $i <= 20; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    @for ($j = 1; $j <= 23; $j++)
                        <td></td>
                    @endfor
                    <td></td>
                </tr>
            @endfor

            <!-- Fila H/S: suma total de las horas de todas las actividades por semana -->
            <tr>
                <td><strong>H/S</strong></td>
                @for ($i = 1; $i <= 23; $i++)
                    <td>{{ $actividades->sum('horas') }}</td>
                @endfor
                <td><strong>{{ number_format($actividades->sum('horas') * 23, 1, ',', '.') }}</strong></td>
            </tr>
        </tbody>
    </table>

    <div class="mt-3">
        <p><strong>(Docente Planta, TC el total de horas de 45 minutos al semestre debe ser de 906.6 y los MT debe ser de 453.3)</strong></p>
        <p><strong>(Docente Planta, TC el total de horas de 60 minutos al semestre debe ser de 680 y los MT debe ser de 340)</strong></p>
    </div>
</div>
@endsection
