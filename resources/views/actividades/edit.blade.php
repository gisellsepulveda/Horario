@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Editar Actividad</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('actividades.update', $actividad) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nombre_actividad" class="form-label">Nombre de la Actividad <span class="text-danger">*</span></label>
                    <input type="text" id="nombre_actividad" name="nombre_actividad" value="{{ old('nombre_actividad', $actividad->nombre_actividad) }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="misional" class="form-label">Componente Misional</label>
                    <input type="text" id="misional" name="misional" value="{{ old('misional', $actividad->misional) }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="4">{{ old('descripcion', $actividad->descripcion) }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="horas" class="form-label">Horas</label>
                        <input type="number" id="horas" name="horas" value="{{ old('horas', $actividad->horas) }}" class="form-control" min="1" max="3" required>
                        </div>
                    <div class="col-md-6 mb-3">
                        <label for="responsable_seguimiento" class="form-label">Responsable de Seguimiento</label>
                        <input type="text" id="responsable_seguimiento" name="responsable_seguimiento" value="{{ old('responsable_seguimiento', $actividad->responsable_seguimiento) }}" class="form-control">
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('actividades.index') }}" class="btn btn-secondary me-2">Cancelar</a>
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection