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
        Schema::create('antecedentes_ginecologicos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_paciente');
            $table->integer('hijos');
            $table->integer('numero_hijos');
            $table->integer('partos');
            $table->integer('numero_partos');
            $table->integer('control_prenatal');
            $table->integer('trabajo_parto');
            $table->string('complicaciones_parto');
            $table->integer('tipo_parto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antecedentes_ginecologicos');
    }
};
