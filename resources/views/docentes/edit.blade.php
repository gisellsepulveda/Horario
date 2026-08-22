@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Editar Docente</h1>

    <div class="card shadow-lg">
        <div class="card-body">
            <form action="{{ route('docentes.update', $docente->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Apellidos</label>
                        <input type="text" name="apellidos" class="form-control" value="{{ $docente->apellidos }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Nombres</label>
                        <input type="text" name="nombres" class="form-control" value="{{ $docente->nombres }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Cédula</label>
                        <input type="text" name="cc" class="form-control" value="{{ $docente->cc }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Tarjeta Profesional</label>
                        <input type="text" name="tarjeta_profesional" class="form-control" value="{{ $docente->tarjeta_profesional }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Facultad/Departamento</label>
                        <input type="text" name="facultad_departamento" class="form-control" value="{{ $docente->facultad_departamento }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Unidad Académica</label>
                        <input type="text" name="unidad_academica" class="form-control" value="{{ $docente->unidad_academica }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
    <label>Campus</label>
    <select name="campus" class="form-control" required>
        @foreach (App\Models\Docente::getCampusOptions() as $campus)
            <option value="{{ $campus }}" {{ $docente->campus == $campus ? 'selected' : '' }}>{{ $campus }}</option>
        @endforeach
    </select>
</div>

                    <div class="col-md-6 mb-3">
                        <label>Tipo de Vinculación</label>
                        <input type="text" name="tipo_vinculacion" class="form-control" value="{{ $docente->tipo_vinculacion }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
    <label>Escalafón Docente</label>
    <select name="escalafon_docente" class="form-control" required>
        @foreach (App\Models\Docente::getEscalafonOptions() as $escalafon)
            <option value="{{ $escalafon }}" {{ $docente->escalafon_docente == $escalafon ? 'selected' : '' }}>{{ $escalafon }}</option>
        @endforeach
    </select>
</div>

                    <div class="col-md-6 mb-3">
                        <label>Semestre/Año</label>
                        <input type="text" name="semestre_anio" class="form-control" value="{{ $docente->semestre_anio }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Dirección de Residencia</label>
                        <input type="text" name="direccion_residencia" class="form-control" value="{{ $docente->direccion_residencia }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Teléfono Fijo</label>
                        <input type="text" name="telefono_fijo" class="form-control" value="{{ $docente->telefono_fijo }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Número Celular</label>
                        <input type="text" name="numero_celular" class="form-control" value="{{ $docente->numero_celular }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Email</label>
                        <input type="email" name="correo_electronico" class="form-control" value="{{ $docente->correo_electronico }}" required>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Actualizar</button>
                    <a href="{{ route('docentes.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Volver</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
