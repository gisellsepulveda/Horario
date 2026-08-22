<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DescripcionActividad;
use App\Models\ActividadCatalogo;

class DescripcionActividadSeeder extends Seeder
{
    public function run(): void
    {
        // Buscar la actividad a la que se le asignarán descripciones
        $actividad = ActividadCatalogo::where('nombre_actividad', 'Docencia Directa: Orientación de curso')->first();

        if ($actividad) {
            $descripciones = [
                ['descripcion' => 'DESARROLLO DE APLICACIONES EMPRESARIALES', 'grupo' => 'D191P'],
                ['descripcion' => 'ACCESORIOS II', 'grupo' => 'A002'],
                ['descripcion' => 'PLAN DE CLASE', 'grupo' => 'F101A'],
                    ['descripcion' => 'ACCESORIOS II', 'grupo' => 'A001'],
                    ['descripcion' => 'ACCESORIOS III', 'grupo' => 'A002'],
                    ['descripcion' => 'ACCIONAMIENTOS', 'grupo' => 'A003'],
                    ['descripcion' => 'ACCIONAMIENTOS ELECTRICOS', 'grupo' => 'A004'],
                    ['descripcion' => 'ACCIONAMIENTOS ELECTRICOS II', 'grupo' => 'A005'],
                    ['descripcion' => 'ADMINISTRACION AMBIENTAL', 'grupo' => 'A006'],
                    ['descripcion' => 'ADMINISTRACION BANCARIA', 'grupo' => 'A007'],
                    ['descripcion' => 'ADMINISTRACION COMERCIAL Y DE SERVICIOS', 'grupo' => 'A008'],
                    ['descripcion' => 'ADMINISTRACION DE LA CALIDAD', 'grupo' => 'A011'],
                    ['descripcion' => 'ADMINISTRACION DE LA PRODUCCION', 'grupo' => 'A041'],
                    ['descripcion' => 'ADMINISTRACIÓN DE OBRAS', 'grupo' => 'A041R'],
                    ['descripcion' => 'ADMINISTRACION DE PROCESOS', 'grupo' => 'A042'],
                    ['descripcion' => 'ADMINISTRACION DE REDES', 'grupo' => 'A043'],
                    ['descripcion' => 'ADMINISTRACION DE RIESGO DE CREDITO Y LIQUIDEZ', 'grupo' => 'A044'],
                    ['descripcion' => 'ADMINISTRACION DE RIESGO DE MERCADO Y OPERACIONAL', 'grupo' => 'A045'],
                    ['descripcion' => 'ADMINISTRACION DE SALARIOS', 'grupo' => 'A046'],
                    ['descripcion' => 'ADMINISTRACION DE SERVIDORES', 'grupo' => 'A047'],
                    ['descripcion' => 'ADMINISTRACION DEL TALENTO HUMANO', 'grupo' => 'A048'],
                    ['descripcion' => 'ADMINISTRACION DEPORTIVA', 'grupo' => 'A051'],
                    ['descripcion' => 'ADMINISTRACION GENERAL', 'grupo' => 'A051A'],
                    ['descripcion' => 'ADMINISTRACION PUBLICA', 'grupo' => 'A051R'],
                    ['descripcion' => 'ADMINISTRACION Y GESTION EMPRESARIAL', 'grupo' => 'A052'],
                    ['descripcion' => 'AGROECOLOGIA', 'grupo' => 'A061'],
                    ['descripcion' => 'AGRONOMIA I', 'grupo' => 'A061A'],
                    ['descripcion' => 'AGRONOMIA II', 'grupo' => 'A062'],
                    ['descripcion' => 'AISLAMIENTO ELECTRICO', 'grupo' => 'A062A'],
                    ['descripcion' => 'ALGEBRA LINEAL', 'grupo' => 'A063'],
                    ['descripcion' => 'ALGEBRA MATRICIAL', 'grupo' => 'A063A'],
                    ['descripcion' => 'ALGEBRA SUPERIOR', 'grupo' => 'A081'],
                    ['descripcion' => 'AMBIENTE Y DESARROLLO SOSTENIBLE', 'grupo' => 'A082'],
                    ['descripcion' => 'ANALISIS DE CIRCUITOS ELECTRICOS I', 'grupo' => 'A083'],
                    ['descripcion' => 'ANALISIS DE CIRCUITOS ELECTRICOS II', 'grupo' => 'A101'],
                    ['descripcion' => 'ANALISIS DE CREDITO', 'grupo' => 'A101R'],
                    ['descripcion' => 'ANALISIS DE DATOS A GRAN ESCALA', 'grupo' => 'A102'],
                    ['descripcion' => 'ANALISIS DE ESTADOS FINANCIERO', 'grupo' => 'A103'],
                    ['descripcion' => 'ANALISIS DE ESTADOS FINANCIEROS', 'grupo' => 'A104'],
                    ['descripcion' => 'ANALISIS DE INTEGRIDAD DE EQUIPOS', 'grupo' => 'A105'],
                    ['descripcion' => 'ANALISIS DE SISTEMAS ELECTRICOS DE POTENCIA', 'grupo' => 'A111'],
                    ['descripcion' => 'ANALISIS FINANCIERO', 'grupo' => 'A112'],
                    ['descripcion' => 'ANALISIS NUMERICO', 'grupo' => 'A113'],
                    ['descripcion' => 'ANTENAS', 'grupo' => 'A114'],
                    ['descripcion' => 'ANTROPOLOGIA DEL CONSUMIDOR', 'grupo' => 'A115'],
                    ['descripcion' => 'APLICACIONES MOVILES', 'grupo' => 'A116'],
                    ['descripcion' => 'ARQUITECTURA DE SOFTWARE', 'grupo' => 'A118'],
                    ['descripcion' => 'ARQUITECTURA DEL VESTUARIO I', 'grupo' => 'A118A'],
                    ['descripcion' => 'ARQUITECTURA DEL VESTUARIO II', 'grupo' => 'A119'],
                    ['descripcion' => 'ARTE,CULTURA Y SOCIEDAD', 'grupo' => 'A131'],
                    ['descripcion' => 'ATLETISMO I', 'grupo' => 'A132'],
                    ['descripcion' => 'ATLETISMO II', 'grupo' => 'A133'],
                    ['descripcion' => 'AUDITORIA DE GESTION', 'grupo' => 'A134'],
                    ['descripcion' => 'AUDITORIA DE SISTEMAS', 'grupo' => 'A135'],
                    ['descripcion' => 'AUDITORIA FINANCIERA', 'grupo' => 'A136'],
                    ['descripcion' => 'AUDITORIA Y LA GESTION DE LOS RECURSOS', 'grupo' => 'A137'],
                    ['descripcion' => 'AUTOMATAS Y LENGUAJES FORMALES', 'grupo' => 'A138'],
                    ['descripcion' => 'AUTOMATIZACION INDUSTRIAL', 'grupo' => 'A141'],
                    ['descripcion' => 'BALANCE DE MASAS Y ENERGIA', 'grupo' => 'A142'],
                    ['descripcion' => 'BALANCE DE MATERIA Y ENERGIA', 'grupo' => 'A143'],
                    ['descripcion' => 'BALONCESTO', 'grupo' => 'A144'],
                    ['descripcion' => 'BANCA DIGITAL', 'grupo' => 'A145'],
                    ['descripcion' => 'BASE DE DATOS GEOGRAFICOS', 'grupo' => 'A151'],
                ];
                
          

            foreach ($descripciones as $data) {
                DescripcionActividad::create([
                    'actividad_catalogo_id' => $actividad->id,
                    'descripcion' => $data['descripcion'],
                    'grupo' => $data['grupo'],
                ]);
            }

            echo "✅ Descripciones añadidas a '{$actividad->nombre_actividad}'\n";
        } else {
            echo "⚠️ No se encontró la actividad para asignar descripciones.\n";
        }
    }
}
