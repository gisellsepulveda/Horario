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
    Schema::create('actividades_catalogo', function (Blueprint $table) {
        $table->id();
        $table->string('nombre_actividad')->unique();
        $table->string('misional')->nullable();
        $table->text('descripcion')->nullable();
        $table->decimal('horas', 5, 2)->nullable(); // 5 dígitos en total, 2 decimales
        $table->string('responsable')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividades_catalogo');
    }
};
