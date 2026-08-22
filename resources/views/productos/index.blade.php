@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Lista de Productos</h2>
    <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Agregar Producto</a>

    <table class="table table-bordered" id="productosTable">
        <thead class="table-dark text-center">
            <tr>
                <th>Número de Actividad</th>
                <th>Descripción del Producto</th>
                <th>Fecha de Entrega (Compromiso)</th>
                <th>Fecha de Entrega (Real)</th>
                <th>Comentarios</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->numero_actividad }}</td>
                    <td>{{ $producto->descripcion_producto }}</td>
                    <td>{{ $producto->fecha_compromiso }}</td>
                    <td>{{ $producto->fecha_entrega }}</td>
                    <td>{{ $producto->comentarios }}</td>
                    <td class="text-center">
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este producto?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#productosTable').DataTable();
    });
</script>
@endpush
