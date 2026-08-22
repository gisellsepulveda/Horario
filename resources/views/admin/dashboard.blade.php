{{-- resources/views/admin/dashboard.blade.php --}}
@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard Administrador') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                <div class="mb-6">
                    <h3 class="text-lg font-semibold">Bienvenido, {{ auth()->user()->name }}!</h3>
                    <p class="text-sm text-gray-500">Aquí puedes gestionar todos los aspectos del sistema.</p>
                </div>

                <!-- Panel de control de administración -->
                <div class="row g-4">
                    <div class="col-12 col-md-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fas fa-chalkboard-teacher text-primary me-2"></i>
                                    Gestión de Docentes
                                </h5>
                                <p class="card-text">Agregar, editar o eliminar docentes.</p>
                                <a href="{{ route('docentes.index') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-eye me-1"></i> Ver Docentes
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fas fa-tasks text-success me-2"></i>
                                    Gestión de Actividades
                                </h5>
                                <p class="card-text">Gestiona las actividades y seguimiento.</p>
                                <a href="{{ route('actividades.index') }}" class="btn btn-outline-success">
                                    <i class="fas fa-eye me-1"></i> Ver Actividades
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fas fa-box-open text-warning me-2"></i>
                                    Gestión de Productos
                                </h5>
                                <p class="card-text">Revisa y gestiona los productos del sistema.</p>
                                <a href="{{ route('productos.index') }}" class="btn btn-outline-warning">
                                    <i class="fas fa-eye me-1"></i> Ver Productos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12 col-md-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fas fa-box-open text-warning me-2"></i>
                                    Gestión de ingresos
                                </h5>
                                <p class="card-text">Revisa ingresos del sistema.</p>
                                <a href="{{ route('personas.index') }}" class="btn btn-outline-warning">
                                    <i class="fas fa-eye me-1"></i> Ver Productos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panel de control de horarios -->
                <div class="row g-4 mt-4">
                    <div class="col-12 col-md-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fas fa-calendar-alt text-purple me-2"></i>
                                    Generar Horarios Automáticos
                                </h5>
                                <p class="card-text">Crea horarios automáticamente.</p>
                                <a href="{{ route('horarios.index') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-play me-1"></i> Generar Ahora
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fas fa-redo-alt text-orange me-2"></i>
                                    Limpiar y Generar Horarios
                                </h5>
                                <p class="card-text">Elimina horarios viejos y genera nuevos.</p>
                                <a href="{{ route('horarios.limpiarGenerar') }}" class="btn btn-outline-danger">
                                    <i class="fas fa-trash me-1"></i> Limpiar y Generar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
