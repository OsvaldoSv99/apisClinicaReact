<?php

namespace App\Http\Controllers;

use App\Models\Recetas;
use Illuminate\Http\Request;

class RecetasController extends Controller
{

    public function index($id)
    {
        try {
            $pacientes = Recetas::where('id_paciente', $id)->get();
            if ($pacientes->isEmpty()) {
                return $this->RespuestaError('No se encontraron recetas', [], 404);
            }
            return $this->RespuestaJson($pacientes, 'Lista de recetas', 200);
        } catch (\Throwable $th) {
            return $this->RespuestaError('Error al obtener las recetas', ['error' => $th->getMessage()], 500);
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

    public function show(Recetas $recetas)
    {
        //
    }

    public function edit(Recetas $recetas)
    {
        //
    }

    public function update(Request $request, Recetas $recetas)
    {
        //
    }

    public function destroy(Recetas $recetas)
    {
        //
    }
}
