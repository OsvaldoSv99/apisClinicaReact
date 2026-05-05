<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\RecetasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('posts', PostController::class);

Route::resource('paciente', PacienteController::class);

Route::controller(RecetasController::class)->prefix('recetas')->group(function(){
    Route::get('/{id}', 'index')->name('recetas.index');
});

