<x-app-layout>

    {{-- Por terminos de practicidad crearemos solo el nombre, responsable y el monto --}}
    <h1>Formulario para crear un nuevo proyecto</h1>

    <form action="/projects" method="POST">

        @csrf

        <label>

            Nombre:
            <input type="text" name="nombre">

        </label>

        <br>
        <br>

        <label>

            Responsable:
            <input type="text" name="responsable">

        </label>

        <br>
        <br>

        <label>

            Monto:
            <input type="number" name="monto">

        </label>

        <br>
        <br>

        <button type="submit">Crear Proyecto</button>

    </form>

</x-app-layout>