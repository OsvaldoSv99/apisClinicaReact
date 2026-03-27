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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('no_expediente');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->date('fecha_nacimiento');
            $table->string('correo');
            $table->string('curp');
            $table->string('domicilio');
            $table->string('telefono');
            $table->string('ocupacion');
            $table->string('estado_civil');
            $table->string('religion');
            $table->string('escolaridad');
            $table->string('alergias');
            $table->string('medicamentos');
            $table->string('contacto_telefono');
            $table->string('contacto_nombre');
            $table->string('tipo_sangre');
            $table->integer('sexo');
            $table->string('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
