<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recetas extends Model
{
    protected $table = 'recetas';
    protected $fillable = [
        'id_paciente',
        'fecha',
        'hora',
        'diagnostico',
        'indicaciones',
        'proxima_cita'
    ];
}
