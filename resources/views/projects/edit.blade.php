<x-app-layout>

    {{-- Por terminos de practicidad editaremos solo el nombre, responsable y el monto --}}
    <h1>Formulario para editar un proyecto</h1>
    
        <form action="/projects/{{$project->id}}" method="POST">
    
            @csrf

            @method('PUT')
    
            <label>
    
                Nombre:
                <input type="text" name="nombre" value="{{ $project->nombre }}">
    
            </label>
    
            <br>
            <br>
    
            <label>
    
                Responsable:
                <input type="text" name="responsable" value="{{ $project->responsable }}">
    
            </label>
    
            <br>
            <br>
    
            <label>
    
                Monto:
                <input type="number" name="monto" value="{{ $project->monto }}">
    
            </label>
    
            <br>
            <br>
    
            <button type="submit">Actualizar Proyecto</button>
    
        </form>
    
    </x-app-layout>