<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\ProductoSeguimientoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\PersonaController;
use App\Models\DescripcionActividad;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Ruta pública
Route::get('/', fn() => view('welcome'));

// API (requiere autenticación)
Route::get('/api/descripciones/{actividad_id}', fn($actividad_id) =>
    DescripcionActividad::where('actividad_catalogo_id', $actividad_id)->get()
)->middleware('auth:sanctum');

// Rutas protegidas (solo requieren login)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Dashboard sin validación de rol
    Route::get('/dashboard', function () {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    })->name('dashboard');

    // Productos
    Route::resource('productos', ProductoSeguimientoController::class);

    // Horarios
    Route::get('horarios/limpiar-generar', [HorarioController::class, 'limpiarYGenerar'])
        ->name('horarios.limpiarGenerar');
    Route::get('horarios/generar-automatico', [HorarioController::class, 'generarAutomatico'])
        ->name('horarios.generarAutomatico');
    Route::resource('horarios', HorarioController::class);

    // Docentes
    Route::resource('docentes', DocenteController::class);

    // Actividades
    Route::resource('actividades', ActividadController::class)
        ->parameters(['actividades' => 'actividad']);
    Route::get('/seguimiento-actividades', [ActividadController::class, 'seguimiento'])
        ->name('seguimiento.actividades');

    // Personas
    Route::get('personas', [PersonaController::class, 'index'])
        ->name('personas.index');
});
