<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MantenedorModel;

class MantenedorController extends Controller
{

    // Función principal
    public function index() {
        return view('welcome');
    }

    // Función que busca todos los proyectos
    public function getAll() {
        
        $projects = MantenedorModel::all();

        return view('projects.index', compact('projects'));
        
    }

    // Función que busca un proyecto por su id
    public function get($project) {
       
        // Buscar el proyecto por su id
        $project = MantenedorModel::find($project);

        // Redirigir a la vista del proyecto encontrado y mandar el parámetro $project ['project' => $project]
        return view('projects.show', compact('project'));
        
    }

    // Función que manda a la vista del formulario para crear un proyecto
    public function create() {
        return view('projects.create');
    }

    // Función que crea el proyecto
    public function new(Request $request){

        // crear el objeto nuevo
        $project = new MantenedorModel();

        // Agregar datos a la tabla proyectos creada 
        //Por terminos de practicidad crearemos solo el nombre, responsable y el monto, lo demás queda nulo
        $project->nombre = $request->nombre;
        $project->responsable = $request->responsable;
        $project->monto = $request->monto;

        // Guardar la tabla
        $project->save();

        // Reedirigir hacia projects
        return redirect('/projects');

    }

    // Función que nos trae la información a un formulario para luego editarlo
    public function edit($project) {

        // Buscar el proyecto por su id
        $project = MantenedorModel::find($project);

        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, $project){ //no nos debemos olvidar setear el ID para poder buscar el objeto

        // Buscar el proyecto por su id
        $project = MantenedorModel::find($project);

        // Actualizar datos del proyecto según su id
        //Por terminos de practicidad cactualizaremos solo el nombre, responsable y el monto, lo demás queda nulo
        $project->nombre = $request->nombre;
        $project->responsable = $request->responsable;
        $project->monto = $request->monto;

         // Guardar la tabla
         $project->save();

         // Reedirigir hacia projects
         return redirect("/projects/{$project->id}");
        
    }

    public function destroy($project){

        // Buscar el proyecto por su id
        $project = MantenedorModel::find($project);

        //para eliminar
        $project->delete();

        return view('projects.delete', compact('project'));
    }
}
