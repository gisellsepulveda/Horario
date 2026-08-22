<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ActividadCatalogo;

class ActividadesCatalogoSeeder extends Seeder
{
    public function run(): void
    {
        // Lista de actividades a agregar al catálogo
        $actividades = [
            'Docencia Directa: Orientación de curso',
            'Docencia Directa: Orientación de Módulo',
            'Docencia Directa: Orientación de Módulo Virtual - Tutor',
            'Docencia Directa: Orientación de Módulo Virtual - Diseñador',
            'Docencia Directa: Orientación de Módulo Virtual - Consejero',
            'Docencia Directa: Tutorias',
            'Preparación de clase: Metodología Pedagógica del Curso',
            'Preparación de módulo: Metodología Pedagógica del Módulo',
            'ODA: PAD',
            'ODA: PAE',
            'ODA: Capacitación Docente',
            'ODA: Evaluación Curricular',
            'ODA: Diseño o Rediseño Plan de Curso',
            'ODA: Renovación de Registro Calificado',
            'Colectivo Docente: Plan de Clase',
            'Colectivo Docente: Instrumento de Evaluación',
            'Colectivo Docente: Permanencia',
            'Oficina de las Tic: Diseño de Módulos',
            'OACA: Registro Calificado',
            'OACA: Renovación de Registro Calificado',
            'OACA: Condiciones Iniciales',
            'OACA: Acreditación',
            'OACA: Autoevaluación Institucional',
            'OACA: Autoevaluación de Programa',
            'OACA: Vigía de Calidad',
            'Prospectiva: Del programa académico',
            'Comité: Curricular',
            'Comité: Trabajos de Grado',
            'Comité: Autoevaluación',
            'Comité: Investigación y Semilleros',
            'Extensión: Graduados',
            'Extensión: Práctica Social',
            'Extensión: Educación Continua',
            'Extensión: Emprendimiento',
            'Investigación: Grupo de Investigación',
            'Investigación: Semilleros',
            'Investigación: Condiciones de Registro Calificado',
            'Investigación: Dirección Trabajos de Grado',
            'Coordinación: Participación reunión equipo programa',
        ];

        // Agregar cada actividad al catálogo de actividades
        foreach ($actividades as $actividad) {
            ActividadCatalogo::updateOrCreate(
                ['nombre_actividad' => $actividad],
                [
                    'misional'    => 'N/A',  // Puedes reemplazar esto con un valor real si lo tienes
                    'descripcion' => 'Descripción no disponible',  // Reemplaza con una descripción real si tienes
                    'horas'       => 1,  // Ajusta según sea necesario
                    'responsable' => 'N/A',  // Ajusta según sea necesario
                ]
            );
        }

        echo "✅ Actividades cargadas correctamente.\n";
    }
}
