<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MantenedorController;

// Ruta principal
Route::get('/', [MantenedorController::class, 'Index']);

// Obtener todos
Route::get('/projects', [MantenedorController::class, 'getAll']);

// Formulario para crear un nuevo proyecto
Route::get('/projects/create', [MantenedorController::class, 'create']);

// Obtener un proyecto por el id
Route::get('/projects/{project}', [MantenedorController::class, 'get']);

// Crear un proyecto
Route::post('/projects', [MantenedorController::class, 'new']);

// Mandar a un formulario para luego editar un proyecto
Route::get('/projects/{project}/edit', [MantenedorController::class, 'edit']);

// Editar un proyecto creado
Route::put('/projects/{project}', [MantenedorController::class, 'update']);

// Eliminar un proyecto
Route::delete('/projects/{project}', [MantenedorController::class, 'destroy']);