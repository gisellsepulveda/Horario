<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    
    protected $table = 'actividades';


    protected $fillable = [
        'docente_id',
        'nombre_actividad',
        'descripcion',
        'grupo',
        'horas',
        'misional',
    ];
    

    
 
    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }  
}