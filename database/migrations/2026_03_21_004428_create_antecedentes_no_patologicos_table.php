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
        Schema::create('antecedentes_no_patologicos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_paciente');
            $table->integer('alcoholismo');
            $table->integer('tabaquismo');
            $table->integer('toxicomanias');
            $table->integer('alimentacion');
            $table->integer('inmunizaciones');
            $table->integer('pasatiempos');
            $table->integer('deportes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antecedentes_no_patologicos');
    }
};
