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
        Schema::create('antecedentes_patologicos', function (Blueprint $table) {
            $table->id();
            $table->integer('infecciones_infancia')->default(0);
            $table->string('nombre_infecciones')->nullable();
            $table->integer('tuberculosis')->nullable();
            $table->integer('alergias')->default(0);
            $table->string('nombre_alergias')->nullable();
            $table->integer('neumonias')->default(0);
            $table->string('nombre_neumonias')->nullable();
            $table->integer('hospitalizaciones_previas')->default(0);
            $table->string('nombre_hospitalizaciones')->nullable();
            $table->integer('traumatismos')->default(0);
            $table->string('nombre_traumatismos')->nullable();
            $table->integer('ets')->default(0);
            $table->string('nombre_ets')->nullable();
            $table->integer('cirugias')->default(0);
            $table->string('nombre_cirugias')->nullable();
            $table->integer('articulares')->default(0);
            $table->string('nombre_articulares')->nullable();
            $table->integer('epilepsia')->default(0);
            $table->integer('transfusiones_sangres')->default(0);
            $table->integer('cardiopatias')->default(0);
            $table->string('nombre_cardiopatias')->nullable();
            $table->integer('marcapasos')->default(0);
            $table->integer('hipertension')->default(0);
            $table->integer('diabetes')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antecedentes_patologicos');
    }
};
