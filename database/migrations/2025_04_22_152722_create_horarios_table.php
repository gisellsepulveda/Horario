<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->enum('dia', ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado']);
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->string('actividad');
            $table->string('grupo')->nullable();
            $table->enum('tipo', ['Mañana', 'Tarde', 'Noche'])->nullable();
            $table->timestamps();
        });
    }
   
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
