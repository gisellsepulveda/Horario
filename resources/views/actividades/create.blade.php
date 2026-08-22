@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Actividad</h2>

    <form action="{{ route('actividades.store') }}" method="POST">
        @csrf

        {{-- Responsable (seleccionado de la lista de docentes) --}}
        <div class="mb-3">
            <label for="responsable">Responsable</label>
            <select name="docente_id" id="docente_id" class="form-control" required>
                <option value="">Seleccione un responsable</option>
                @foreach ($docentes as $docente)
                    <option value="{{ $docente->id }}">
                        {{ $docente->nombres }} {{ $docente->apellidos }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Actividad --}}
        <div class="mb-3">
            <label for="actividad_catalogo">Nombre de la Actividad</label>
            <select id="actividad_catalogo" name="nombre_actividad" class="form-control" required>
                <option value="">Seleccione una actividad</option>
                @foreach ($catalogo as $item)
                    <option value="{{ $item->id }}"
                            data-nombre="{{ $item->nombre_actividad }}"
                            data-misional="{{ $item->misional }}">
                        {{ $item->nombre_actividad }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Misional --}}
        <div class="mb-3">
            <label for="misional">Misional</label>
            <input type="text" name="misional" id="misional" class="form-control" readonly>
        </div>

        {{-- Descripción --}}
        <div class="mb-3">
            <label for="descripcion">Descripción</label>
            <select id="descripcion" name="descripcion" class="form-control" required>
                <option value="">Seleccione una descripción</option>
            </select>
        </div>

        {{-- Grupo (Ahora es un select donde el usuario puede elegir el grupo) --}}
        <div class="mb-3">
            <label for="grupo">Grupo</label>
            <select id="grupo" name="grupo" class="form-control" required>
                <option value="">Seleccione un grupo</option>
            </select>
        </div>

        {{-- Horas --}}
        <div class="mb-3">
            <label for="horas">Horas</label>
            <input type="number" name="horas" id="horas" class="form-control" min="1" max="3" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

{{-- Script para rellenar dinámicamente los campos --}}
<script>
document.getElementById('actividad_catalogo').addEventListener('change', function () {
    const actividadId = this.value;
    const selected = this.options[this.selectedIndex];

    // Mostrar el misional
    document.getElementById('misional').value = selected.dataset.misional || '';

    // Reset campos
    const descripcionSelect = document.getElementById('descripcion');
    descripcionSelect.innerHTML = '<option value="">Cargando...</option>';
    const grupoSelect = document.getElementById('grupo');
    grupoSelect.innerHTML = '<option value="">Seleccione un grupo</option>';

    // Obtener descripciones y grupos
    fetch(`/api/descripciones/${actividadId}`)
        .then(response => response.json())
        .then(data => {
            descripcionSelect.innerHTML = '<option value="">Seleccione una descripción</option>';
            grupoSelect.innerHTML = '<option value="">Seleccione un grupo</option>';

            // Cargar las descripciones
            data.forEach(item => {
                const optionDescripcion = document.createElement('option');
                optionDescripcion.value = item.descripcion;
                optionDescripcion.textContent = item.descripcion;
                descripcionSelect.appendChild(optionDescripcion);

                // Cargar los grupos
                const optionGrupo = document.createElement('option');
                optionGrupo.value = item.grupo;
                optionGrupo.textContent = item.grupo;
                grupoSelect.appendChild(optionGrupo);
            });
        })
        .catch(error => {
            console.error('Error al cargar descripciones y grupos:', error);
            alert('Hubo un problema al cargar las descripciones y grupos. Intenta nuevamente.');
        });
});

// Al cambiar descripción, mostrar grupo correspondiente
document.getElementById('descripcion').addEventListener('change', function () {
    const selected = this.options[this.selectedIndex];
    document.getElementById('grupo').value = selected.dataset.grupo || '';
});
</script>

@endsection
