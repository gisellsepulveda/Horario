@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Registrar Docente</h1>

    <div class="card shadow-lg">
        <div class="card-body">
            <form action="{{ route('docentes.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Apellidos</label>
                        <input type="text" name="apellidos" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Nombres</label>
                        <input type="text" name="nombres" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Cédula</label>
                        <input type="text" name="cc" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Tarjeta Profesional</label>
                        <input type="text" name="tarjeta_profesional" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Facultad/Departamento</label>
                        <input type="text" name="facultad_departamento" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Unidad Académica</label>
                        <input type="text" name="unidad_academica" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
    <label>Campus</label>
    <select name="campus" class="form-control" required>
        <option value="">Seleccione un campus</option>
        @foreach (App\Models\Docente::getCampusOptions() as $campus)
            <option value="{{ $campus }}">{{ $campus }}</option>
        @endforeach
    </select>
</div>

                    <div class="col-md-6 mb-3">
                        <label>Tipo de Vinculación</label>
                        <input type="text" name="tipo_vinculacion" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
    <label>Escalafón Docente</label>
    <select name="escalafon_docente" class="form-control" required>
        <option value="">Seleccione un escalafón</option>
        @foreach (App\Models\Docente::getEscalafonOptions() as $escalafon)
            <option value="{{ $escalafon }}">{{ $escalafon }}</option>
        @endforeach
    </select>
</div>

                    <div class="col-md-6 mb-3">
                        <label>Semestre/Año</label>
                        <input type="text" name="semestre_anio" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Dirección de Residencia</label>
                        <input type="text" name="direccion_residencia" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Teléfono Fijo</label>
                        <input type="text" name="telefono_fijo" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Número Celular</label>
                        <input type="text" name="numero_celular" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Email</label>
                        <input type="email" name="correo_electronico" class="form-control" required>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Guardar</button>
                    <a href="{{ route('docentes.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Volver</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
