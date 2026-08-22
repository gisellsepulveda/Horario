<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoSeguimiento extends Model
{
    use HasFactory;

    protected $table = 'producto_seguimientos'; // Asegúrate que coincida con tu tabla en la base de datos

    protected $fillable = [
        'numero_actividad',
        'descripcion_producto',
        'fecha_compromiso',
        'fecha_entrega',
        'comentarios',
    ];

    protected $dates = [
        'fecha_compromiso',
        'fecha_entrega',
    ];
}
