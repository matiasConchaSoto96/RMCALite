<x-app-layout>

    <h1>Aquí se mostrarán todos los proyectos!!!</h1>

    <a href="/projects/create">Nuevo Proyecto</a>

    <ul>

        @foreach ($projects as $project)

            <li>
                
                <a href="/projects/{{ $project->id }}">
                    {{ $project->nombre }}
                </a>

            </li>

        @endforeach

    </ul>

</x-app-layout>