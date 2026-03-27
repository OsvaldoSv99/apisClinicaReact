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
        Schema::create('antecedentes_familiares', function (Blueprint $table) {
            $table->id();
            $table->integer('tuberculosis')->default(0);
            $table->integer('diabetes')->default(0);
            $table->integer('hipertension')->default(0);
            $table->integer('cardiopatias')->default(0);
            $table->string('nombre_cardiopatias');
            $table->integer('hepatopatias')->default(0);
            $table->string('nombre_hepatopatias');
            $table->integer('nefropatias')->default(0);
            $table->string('nombre_nefropatias');
            $table->integer('cancer')->default(0);
            $table->string('nombre_cancer');
            $table->integer('epilepsia')->default(0);
            $table->integer('hematologicas')->default(0);
            $table->string('nombre_hematologicas');
            $table->integer('asma')->default(0);
            $table->integer('endocrinas')->default(0);
            $table->string('nombre_endocrinas');
            $table->integer('mental')->default(0);
            $table->string('nombre_mental');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antecedentes_familiares');
    }
};
