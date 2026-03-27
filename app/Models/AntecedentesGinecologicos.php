<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AntecedentesGinecologicos extends Model
{
    protected $table = 'antecedentes_ginecologicos';

    protected $fillable = [
            'id_paciente',
            'hijos',
            'numero_hijos',
            'partos',
            'numero_partos',
            'control_prenatal',
            'trabajo_parto',
            'complicaciones_parto',
            'tipo_parto',

];


    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }
}
