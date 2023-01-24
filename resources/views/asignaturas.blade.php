<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignaturas') }}
        </h2>
    </x-slot>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="display: flex; justify-content:space-between; align-items: center">
                    {{ __("Estas son tus asignaturas") }}
                    <a href="{{ route('asignaturas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Añadir asignatura</a>
                </div>
            </div>
        </div>
    </div>
    <div style="display: flex; justify-content:center">
        <table>
            <tr>
                <th>Nombre</th>
                <th>Nombre corto</th>
                <th>Profesor</th>
                <th>Color</th>
                <th>Acciones</th>
            </tr>
            @foreach ($asignaturas as $asignatura)
                <tr>
                    <td>{{ $asignatura->nombreAs }}</td>
                    <td>{{ $asignatura->nombreCortoAs }}</td>
                    <td>{{ $asignatura->profesorAs }}</td>
                    <td>
                        <div style="background-color: {{{$asignatura->colorAs }}}; width: 50px; height: 50px; border-radius: 50%;"></div>
                    </td>
                    <td>
                        <a href="./asignaturas/show/{{$asignatura->codAs}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Ver</a>
                        <a href="./asignaturas/edit/{{$asignatura->codAs}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                        <a href="./asignaturas/delete/{{$asignatura->codAs}}" onclick="confirmDelete()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <script>
        function confirmDelete() {
            return confirm("¿Estás seguro de que quieres eliminar esta asignatura?");
        }
    </script>
</x-app-layout>
