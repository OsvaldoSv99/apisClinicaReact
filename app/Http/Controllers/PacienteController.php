<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $paciente = Paciente::all();

            if ($paciente->isEmpty()) {
                return $this->RespuestaError('No se encontraron pacientes', [], 404);
            }
            return $this->RespuestaJson($paciente, 'Lista de pacientes', 200);

        } catch (\Throwable $th) {

            return $this->RespuestaError('Error al obtener los pacientes', ['error' => $th->getMessage()], 500);

        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Paciente $paciente)
    {
        //
    }

    public function edit(Paciente $paciente)
    {
        //
    }

    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    public function destroy(Paciente $paciente)
    {
        //
    }
}
