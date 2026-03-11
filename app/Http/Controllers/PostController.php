<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    public function index()
    {
        try {
            $posts = Post::select('id', 'title', 'body')->get();

            if ($posts->isEmpty()) {
                return $this->RespuestaError('No se encontraron posts', [], 404);
            }

            return $this->RespuestaJson($posts, 'Lista de posts', 200);


        } catch (\Throwable $th) {
            return $this->RespuestaError('Error al obtener los posts', ['error' => $th->getMessage()], 500);
        }

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {

            // Validacion de datos
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'body' => 'required|string',
            ]);

            if ($validator->fails()) {
                return $this->RespuestaError(
                'Error en la validación de datos',
                ['errores' => $validator->errors()],
                422
                );
            }

            $post = Post::create([
                'title' => $request->title,
                'body' => $request->body,
            ]);

            return $this->RespuestaJson($post, 'Post creado', 201);

        } catch (\Throwable $th) {
            return $this->RespuestaError('Error al crear el post', ['error' => $th->getMessage()], 500);
        }


    }

    public function show(string $id)
    {
        try {
            $post = Post::select('id', 'title', 'body')->find($id);
            if ($post) {
                return $this->RespuestaJson($post, 'Post encontrado', 200);
            } else {
                return $this->RespuestaError('Post no encontrado', [], 404);
            }
        } catch (\Throwable $th) {
            return $this->RespuestaError('Error al obtener el post', ['error' => $th->getMessage()], 500);
        }

    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        try {
            $post = Post::find($id);
            if ($post) {
                $post->update([
                    'title' => $request->title,
                    'body' => $request->body,
                ]);
                return $this->RespuestaJson($post, 'Post actualizado', 200);
            } else {
                return $this->RespuestaError('Post no encontrado', [], 404);
            }
        } catch (\Throwable $th) {
            return $this->RespuestaError('Error al actualizar el post', ['error' => $th->getMessage()], 500);
        }

    }

    public function destroy(string $id)
    {
        try {

            $post = Post::find($id);
            if ($post) {
                $post->delete();
                return $this->RespuestaJson(null, 'Post eliminado', 200);
            } else {
                return $this->RespuestaError('Post no encontrado', [], 404);
            }
        } catch (\Throwable $th) {
            return $this->RespuestaError('Error al eliminar el post', ['error' => $th->getMessage()], 500);
        }
    }
}
