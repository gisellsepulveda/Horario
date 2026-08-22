@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Personas Registradas') }}
    </h2>
@endsection

@section('content')
    <div class="card shadow-sm">
      <div class="card-body">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Nombre completo</th>
                    <th>Hora entrada</th>
                    <th>Hora salida</th>
                </tr>
            </thead>
            <tbody>
                @forelse($personas as $p)
                    <tr>
                        <td>{{ $p->nombre_completo }}</td>
                        <td>{{ $p->hora_entrada }}</td>
                        <td>{{ $p->hora_salida ?? '—' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No hay registros aún.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
      </div>
    </div>
@endsection
