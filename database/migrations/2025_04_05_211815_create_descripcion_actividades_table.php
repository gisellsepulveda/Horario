<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('descripcion_actividades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actividad_catalogo_id')->constrained('actividades_catalogo')->onDelete('cascade');
            $table->string('descripcion');
            $table->string('grupo')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('descripcion_actividades');
    }
};
