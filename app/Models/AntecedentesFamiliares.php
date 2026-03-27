<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AntecedentesFamiliares extends Model
{
    protected $table = 'antecedentes_familiares';

    protected $fillable = [
        "tuberculosis",
        "diabetes",
        "hipertension",
        "cardiopatias",
        "nombre_cardiopatias",
        "hepatopatias",
        "nombre_hepatopatias",
        "nefropatias",
        "nombre_nefropatias",
        "cancer",
        "nombre_cancer",
        "epilepsia",
        "hematologicas",
        "nombre_hematologicas",
        "asma",
        "endocrinas",
        "nombre_endocrinas",
        "mental",
        "nombre_mental"
    ];
}
