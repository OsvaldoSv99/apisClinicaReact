<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validated = $request->validate([
            'nombre_paciente' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'correo' => 'required|email|unique:pacientes,correo',
            'sexo' => 'required',
            'fecha_nacimiento' => 'required|date',
            'curp' => 'required|string|max:18|unique:pacientes,curp',
            'domicilio' => 'required|string|max:255',
            'telefono_paciente' => 'required|string|max:20',
            'ocupacion' => 'required|string|max:255',
            'estado_civil' => 'required|string|max:20',
            'religion' => 'required|string|max:255',
            'escolaridad' => 'required|string|max:255',
            'alergias' => 'nullable|string|max:255',
            'medicamentos' => 'nullable|string|max:255',
            'contacto_telefono' => 'required|string|max:20',
            'contacto_nombre' => 'required|string|max:255',
            'tipo_sangre' => 'required|string|max:10',
        ]);
        try {
            $last = Paciente::where('activo', 1)
            ->orderBy('no_expediente', 'desc')
            ->first();

        $next = 1;
        if ($last) {
            $parts = explode('-', $last->no_expediente);
            $next = intval($parts[1]) + 1;
        }

        $data = [
            'no_expediente' => sprintf('FD-%05d', $next),
            'nombre' => $validated['nombre_paciente'],
            'apellido_paterno' => $validated['apellido_paterno'],
            'apellido_materno' => $validated['apellido_materno'],
            'correo' => $validated['correo'],
            'sexo' => $validated['sexo'],
            'fecha_nacimiento' => $validated['fecha_nacimiento'],
            'curp' => $validated['curp'],
            'domicilio' => $validated['domicilio'],
            'telefono' => $validated['telefono_paciente'],
            'ocupacion' => $validated['ocupacion'],
            'estado_civil' => $validated['estado_civil'],
            'religion' => $validated['religion'],
            'escolaridad' => $validated['escolaridad'],
            'alergias' => $validated['alergias'] ?? null,
            'medicamentos' => $validated['medicamentos'] ?? null,
            'contacto_telefono' => $validated['contacto_telefono'],
            'contacto_nombre' => $validated['contacto_nombre'],
            'tipo_sangre' => $validated['tipo_sangre'],
            'activo' => 1,
        ];

        $paciente = Paciente::create($data);

        return $this->RespuestaJson($paciente, 'Paciente registrado correctamente', 201);

        } catch (\Throwable $th) {
            return $this->RespuestaError('Error al registrar el paciente', ['error' => $th->getMessage()], 500);
        }

    }

    public function show($id)
    {
        try {
            $paciente = Paciente::find($id);
            if (!$paciente) {
                return $this->RespuestaError('Paciente no encontrado', [], 404);
            }
            return $this->RespuestaJson($paciente, 'Paciente encontrado', 200);

        }catch (\Throwable $th) {
            return $this->RespuestaError('Error al obtener el paciente', ['error' => $th->getMessage()], 500);
        }
    }

    public function edit(Paciente $paciente)
    {
        //
    }

    public function update(Request $request, Paciente $paciente)
    {
        $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido_paterno' => 'required|string|max:255',
        'apellido_materno' => 'required|string|max:255',
        'correo' => 'required|email',
        'sexo' => 'required',
        'fecha_nacimiento' => 'required|date',
        'curp' => 'required|string',
        'domicilio' => 'required|string|max:255',
        'telefono' => 'required|string|max:20',
        'ocupacion' => 'required|string|max:255',
        'estado_civil' => 'required|string|max:20',
        'religion' => 'required|string|max:255',
        'escolaridad' => 'required|string|max:255',
        'alergias' => 'nullable|string|max:255',
        'medicamentos' => 'nullable|string|max:255',
        'contacto_telefono' => 'required|string|max:20',
        'contacto_nombre' => 'required|string|max:255',
        'tipo_sangre' => 'required|string|max:10',
        ]);

    try{
        $data = [
            'nombre' => $validated['nombre'],
            'apellido_paterno' => $validated['apellido_paterno'],
            'apellido_materno' => $validated['apellido_materno'],
            'correo' => $validated['correo'],
            'sexo' => $validated['sexo'],
            'fecha_nacimiento' => $validated['fecha_nacimiento'],
            'curp' => $validated['curp'],
            'domicilio' => $validated['domicilio'],
            'telefono' => $validated['telefono'],
            'ocupacion' => $validated['ocupacion'],
            'estado_civil' => $validated['estado_civil'],
            'religion' => $validated['religion'],
            'escolaridad' => $validated['escolaridad'],
            'alergias' => $validated['alergias'] ?? null,
            'medicamentos' => $validated['medicamentos'] ?? null,
            'contacto_telefono' => $validated['contacto_telefono'],
            'contacto_nombre' => $validated['contacto_nombre'],
            'tipo_sangre' => $validated['tipo_sangre'],
            'activo' => 1,
        ];

        $paciente = Paciente::where('id', $paciente->id)->update($data);

        return $this->RespuestaJson($paciente, 'Paciente actualizado correctamente', 200);

        } catch (\Throwable $th) {
            return $this->RespuestaError('Error al actualizar el paciente', ['error' => $th->getMessage()], 500);
        }
    }

    public function destroy(Paciente $paciente)
    {
        //
    }
}
