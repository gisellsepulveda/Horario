<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ActividadCatalogo;

class MisionalFieldSeeder extends Seeder
{
    public function run(): void
    {
        $catalogo = ActividadCatalogo::all();

        foreach ($catalogo as $actividad) {
            if (str_contains($actividad->nombre_actividad, 'Docencia')) {
                $actividad->misional = 'Docencia';
            } elseif (str_contains($actividad->nombre_actividad, 'Investigación')) {
                $actividad->misional = 'Investigación';
            } elseif (str_contains($actividad->nombre_actividad, 'Extensión')) {
                $actividad->misional = 'Extensión';
            } else {
                $actividad->misional = 'Otro';
            }

            $actividad->save();
        }

        echo "✅ Campo misional actualizado correctamente.\n";
    }
}

