<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductoSeguimiento;

class ProductoSeguimientoController extends Controller
{
    public function index()
    {
        $productos = ProductoSeguimiento::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero_actividad' => 'required|integer',
            'descripcion_producto' => 'required|string',
            'fecha_compromiso' => 'nullable|date',
            'fecha_entrega' => 'nullable|date',
            'comentarios' => 'nullable|string',
        ]);

        ProductoSeguimiento::create($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto agregado correctamente.');
    }

    public function edit(ProductoSeguimiento $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, ProductoSeguimiento $producto)
    {
        $request->validate([
            'numero_actividad' => 'required|integer',
            'descripcion_producto' => 'required|string',
            'fecha_compromiso' => 'nullable|date',
            'fecha_entrega' => 'nullable|date',
            'comentarios' => 'nullable|string',
        ]);

        $producto->update($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(ProductoSeguimiento $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado.');
    }
}
