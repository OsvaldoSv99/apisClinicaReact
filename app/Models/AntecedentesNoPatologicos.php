<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AntecedentesNoPatologicos extends Model
{
    protected $table = 'antecedentes_no_patologicos';

    protected $fillable = [
        "id_paciente",
        "alcoholismo",
        "tabaquismo",
        "toxicomanias",
        "alimentacion",
        "inmunizaciones",
        "pasatiempos",
        "deportes"
    ];
}
