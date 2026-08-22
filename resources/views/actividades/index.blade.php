@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de Actividades</h2>

    <a href="{{ route('actividades.create') }}" class="btn btn-primary mb-3">Nueva Actividad</a>

    <table class="table table-bordered" id="actividadesTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Responsable</th>
                <th>Actividad</th>
                <th>Misional</th>
                <th>Descripción</th>
                <th>Grupo</th>
                <th>Horas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($actividades as $index => $actividad)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $actividad->docente->nombres }} {{ $actividad->docente->apellidos }}</td>
                    <td>{{ $actividad->nombre_actividad }}</td>
                    <td>{{ $actividad->misional }}</td>
                    <td>{{ $actividad->descripcion }}</td>
                    <td>{{ $actividad->grupo }}</td>
                    <td>{{ $actividad->horas }}</td>
                    <td class="text-center">
                        <a href="{{ route('actividades.edit', $actividad->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('actividades.destroy', $actividad->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar esta actividad?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">No hay actividades registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#actividadesTable').DataTable();
    });
</script>
@endpush
