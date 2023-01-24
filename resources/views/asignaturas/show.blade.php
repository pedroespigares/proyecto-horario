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
            text-align: center;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="display: flex; justify-content:space-between; align-items: center">
                    {{ __("Datos asignatura ") }}{{ $asignatura->nombreAs }}
                    <a href="{{ route('asignaturas') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver asignaturas</a>
                </div>
            </div>
        </div>
    </div>
    <table style="width:50vw; margin: 0 auto;">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Nombre abreviado</th>
            <th>Profesor</th>
            <th>Color</th>
        </tr>
        <tr>
            <td>{{ $asignatura->codAs }}</td>
            <td>{{ $asignatura->nombreAs }}</td>
            <td>{{ $asignatura->nombreCortoAs }}</td>
            <td>{{ $asignatura->profesorAs }}</td>
            <td style="background-color:{{ $asignatura->colorAs }};">{{ $asignatura->colorAs }}</td>
        </tr>
</x-app-layout>