<div class="mb-3">
    <label for="numero_actividad" class="form-label">Número de Actividad</label>
    <input type="number" name="numero_actividad" class="form-control" value="{{ old('numero_actividad', $producto->numero_actividad ?? '') }}" required>
</div>

@php
  $descripciones = [
    "Informe final del Proyecto Acopañamiento Estudiante",
    "Informe final del Proyecto Acompañamiento Docente",
    "Producto final del seminario o módulo",
    "Producto final de la evaluación curricular del programa",
    "Entrega final del plan de curso del programa",
    "Entrega final de las condiciones curriculares",
    "Actas de reunión - Socialización de la línea del área de conocimiento",
    "Informe de permanencia por corte",
    "Diseño de módulos del área de conocimiento",
    "Informe parcial o final de autoevaluación Institucional",
    "Informe parcial o final de autoevaluación del programa",
    "Actas de reunión - Instrumentos de evaluación",
    "Entrega final de las condiciones institucionales y del programa",
    "Informe parcial o final del documento de acreditación institucional y del programa",
    "Informe parcial o final de las condiciones iniciales",
    "Informe parcial o final de la prospectiva del programa académico",
    "Actas de los comités",
    "Informe final de proyectos de emprendimiento",
    "Informe final del seguimiento e impacto a graduados",
    "Informe final o parcial de prácticas sociales",
    "Informe final de propuestas y desarrollo de educación continua",
    "Informes parciales o finales de actividades desarrolladas en los semilleros de investigación",
    "Informe estadístico de modalidades de trabajo de grado desarrolladas",
    "Informe parcial o final del proyecto de investigación",
    "Actas y registro de asistencia",
    "Plan de clase - actas de notas - guías orientadoras - parcial por corte",
    "Informe Final de la Atención de Tutorías de Curso",
    "Consejería a Estudiantes",
    "Diseño de Módulo Virtual",
    "Plan de Módulo Virtual",
    "Guías - Talleres - Métodos de Aprendizaje",
  ];
  $selected = old('descripcion_producto', isset($producto) ? $producto->descripcion_producto : '');
@endphp

<div class="mb-3">
  <label for="descripcion_producto" class="form-label">Descripción del Producto</label>
  <select name="descripcion_producto" class="form-select" required>
    <option value="" disabled {{ $selected=='' ? 'selected' : '' }}>-- Selecciona una descripción --</option>
    @foreach($descripciones as $desc)
      <option value="{{ $desc }}" {{ $selected === $desc ? 'selected' : '' }}>
        {{ $desc }}
      </option>
    @endforeach
  </select>
</div>


<div class="mb-3">
    <label for="fecha_compromiso" class="form-label">Fecha de Compromiso de Entrega</label>
    <input type="date" name="fecha_compromiso" class="form-control" value="{{ old('fecha_compromiso', $producto->fecha_compromiso ?? '') }}">
</div>

<div class="mb-3">
    <label for="fecha_entrega" class="form-label">Fecha de Entrega Real</label>
    <input type="date" name="fecha_entrega" class="form-control" value="{{ old('fecha_entrega', $producto->fecha_entrega ?? '') }}">
</div>

<div class="mb-3">
    <label for="comentarios" class="form-label">Comentarios del Responsable del Seguimiento</label>
    <textarea name="comentarios" class="form-control" rows="3">{{ old('comentarios', $producto->comentarios ?? '') }}</textarea>
</div>
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $e)
        <li>{{ $e }}</li>
      @endforeach
    </ul>
  </div>
@endif
