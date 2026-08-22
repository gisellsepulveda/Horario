<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('producto_seguimientos', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_actividad');
            $table->string('descripcion_producto');
            $table->date('fecha_compromiso')->nullable();
            $table->date('fecha_entrega')->nullable();
            $table->text('comentarios')->nullable();
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('producto_seguimientos');
    }
};
