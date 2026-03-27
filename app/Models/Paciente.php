<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';

    protected $fillable = [
        "nombre",
        "no_expediente",
        "apellido_paterno",
        "apellido_materno",
        "fecha_nacimiento",
        "correo",
        "curp",
        "domicilio",
        "telefono",
        "ocupacion",
        "estado_civil",
        "religion",
        "escolaridad",
        "alergias",
        "medicamentos",
        "contacto_telefono",
        "contacto_nombre",
        "tipo_sangre",
        "sexo",
        "activo"
    ];
}
