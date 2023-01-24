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
        input[type="submit"]:hover{
            cursor: pointer;
        }
        img{
            height: 20px;
            width: 20px;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="display: flex; justify-content:space-between; align-items: center">
                    {{ __("Nueva asignatura") }}
                    <a href="{{ route('asignaturas') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver asignaturas</a>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="display:flex; justify-content:center;">
        <form action="/asignaturas/create" method ="POST" style="display: flex; flex-direction: column; width:50vw;">
            @csrf
            <label>Nombre:</label>
            <input type="text" name="nombreAs" placeholder="Nombre">

            <label>Nombre abreviado:</label>
            <input type="text" name="nombreCortoAs" placeholder="Nombre abreviado">

            <label>Profesor:</label>
            <input type="text" name="profesorAs" placeholder="Profesor">

            <label>Color:</label>
            <div style="display:flex;">
                <input type="color" name="colorAs" placeholder="Color">
            </div>
            <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-5 mt-5" type="submit" value="Guardar">
        </form>
    </div>
</x-app-layout>