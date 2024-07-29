<x-app-layout>
    <a href="/projects">Volver a projects</a>

    <h1>Nombre: {{ $project->nombre }}</h1>
    <p> 
        <b>Responsable: </b> {{ $project->responsable  }}
    </p>

    <p> {{ $project->monto  }} </p>

    <a href="/projects/{{$project->id}}/edit">Editar Proyecto</a>

    <form action="/projects/{{$project->id}}" method="POST">

        @csrf

        @method('DELETE')

        <button type="submit">
            Eliminar Proyecto
        </button>
    </form>
</x-app-layout>