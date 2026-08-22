@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h1 class="text-center mb-4">Lista de Docentes</h1>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('docentes.create') }}" class="btn btn-primary">
            <i class="fas fa-user-plus"></i> Nuevo Docente
        </a>
    </div>
    

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover shadow-lg text-center">
            <thead class="table-dark">
                <tr>
                    <th>Apellidos</th>
                    <th>Nombres</th>
                    <th>Cédula</th>
                    <th>Tarjeta Profesional</th>
                    <th>Facultad/Departamento</th>
                    <th>Unidad Académica</th>
                    <th>Campus</th>
                    <th>Tipo de Vinculación</th>
                    <th>Escalafón Docente</th>
                    <th>Semestre/Año</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($docentes as $docente)
                <tr>
                    <td>{{ $docente->apellidos }}</td>
                    <td>{{ $docente->nombres }}</td>
                    <td>{{ $docente->cc }}</td>
                    <td>{{ $docente->tarjeta_profesional ?? 'N/A' }}</td>
                    <td>{{ $docente->facultad_departamento }}</td>
                    <td>{{ $docente->unidad_academica }}</td>
                    <td>{{ $docente->campus }}</td>
                    <td>{{ $docente->tipo_vinculacion }}</td>
                    <td>{{ $docente->escalafon_docente }}</td>
                    <td>{{ $docente->semestre_anio }}</td>
                    <td>{{ $docente->direccion_residencia ?? 'N/A' }}</td>
                    <td>{{ $docente->telefono_fijo ?? 'N/A' }}</td>
                    <td>{{ $docente->numero_celular }}</td>
                    <td>{{ $docente->correo_electronico }}</td>
                    <td>
                        <a href="{{ route('docentes.edit', $docente->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                        <form action="{{ route('docentes.destroy', $docente->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar?')">
                                <i class="fas fa-trash-alt"></i> Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="15" class="text-center text-muted">No hay docentes registrados.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection



