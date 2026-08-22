<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('apellidos');
            $table->string('nombres');
            $table->string('tarjeta_profesional')->nullable();
            $table->string('cc')->unique();
            $table->string('facultad_departamento');
            $table->string('unidad_academica');
            $table->enum('campus', ['Barrancabermeja', 'Piedecuesta', 'Bucaramanga', 'Vélez']);
            $table->string('tipo_vinculacion');
            $table->enum('escalafon_docente', ['Auxiliar', 'Asistente', 'Asociado', 'Titular']);
            $table->string('semestre_anio');
            $table->string('direccion_residencia')->nullable();
            $table->string('telefono_fijo')->nullable();
            $table->string('numero_celular');
            $table->string('correo_electronico')->unique();
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
