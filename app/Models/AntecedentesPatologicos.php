<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AntecedentesPatologicos extends Model
{
    protected $table = 'antecedentes_patologicos';

    protected $fillable = [
            "infecciones_infancia",
            "nombre_infecciones",
            "tuberculosis",
            "alergias",
            "nombre_alergias",
            "neumonias",
            "nombre_neumonias",
            "hospitalizaciones_previas",
            "nombre_hospitalizaciones",
            "traumatismos",
            "nombre_traumatismos",
            "ets",
            "nombre_ets",
            "cirugias",
            "nombre_cirugias",
            "articulares",
            "nombre_articulares",
            "epilepsia",
            "transfusiones_sangres",
            "cardiopatias",
            "nombre_cardiopatias",
            "marcapasos",
            "hipertension",
            "diabetes"
    ];
}
