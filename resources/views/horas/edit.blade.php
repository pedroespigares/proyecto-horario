<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Horas') }}
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
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="display: flex; justify-content:space-between; align-items: center">
                    {{ __("Editar hora") }}
                    <a href="{{ route('horas') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver horas</a>
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
        <form action="/horas/edit/{{ $hora->codAs }}/{{ $hora->diaH }}/{{ $hora->horaH }}" method ="POST" style="display: flex; flex-direction: column; width:50vw;">
            @csrf
            {{ method_field('PUT') }}
            <label for="codigoAs">Asignatura:</label>
            <select name="codigoAs">
                @foreach ($asignaturas as $asignatura)
                    <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreAs }}</option>
                @endforeach
            </select>

            <label for="horaH">Hora:</label>
            <select name="horaH">
                @switch($hora->horaH)
                    @case(1)
                    <option value="1" selected>8:15 - 9:15</option>
                    <option value="2">9:15 - 10:15</option>
                    <option value="3">10:15 - 11:15</option>
                    <option value="4">11:45 - 12:45</option>
                    <option value="5">12:45 - 13:45</option>
                    <option value="6">13:45 - 14:45</option>
                    @break
                    @case(2)
                    <option value="1">8:15 - 9:15</option>
                    <option value="2" selected>9:15 - 10:15</option>
                    <option value="3">10:15 - 11:15</option>
                    <option value="4">11:45 - 12:45</option>
                    <option value="5">12:45 - 13:45</option>
                    <option value="6">13:45 - 14:45</option>
                    @break
                    @case(3)
                    <option value="1">8:15 - 9:15</option>
                    <option value="2">9:15 - 10:15</option>
                    <option value="3" selected>10:15 - 11:15</option>
                    <option value="4">11:45 - 12:45</option>
                    <option value="5">12:45 - 13:45</option>
                    <option value="6">13:45 - 14:45</option>
                    @break
                    @case(4)
                    <option value="1">8:15 - 9:15</option>
                    <option value="2">9:15 - 10:15</option>
                    <option value="3">10:15 - 11:15</option>
                    <option value="4" selected>11:45 - 12:45</option>
                    <option value="5">12:45 - 13:45</option>
                    <option value="6">13:45 - 14:45</option>
                    @break
                    @case(5)
                    <option value="1">8:15 - 9:15</option>
                    <option value="2">9:15 - 10:15</option>
                    <option value="3">10:15 - 11:15</option>
                    <option value="4">11:45 - 12:45</option>
                    <option value="5" selected>12:45 - 13:45</option>
                    <option value="6">13:45 - 14:45</option> 
                    @break
                    @case(6)
                    <option value="1">8:15 - 9:15</option>
                    <option value="2">9:15 - 10:15</option>
                    <option value="3">10:15 - 11:15</option>
                    <option value="4">11:45 - 12:45</option>
                    <option value="5" selected>12:45 - 13:45</option>
                    <option value="6">13:45 - 14:45</option> 
                    @break
                    @default
                        
                @endswitch
            </select>

            <label for="diaH">Dia:</label>
            <select name="diaH">
                @switch($hora->diaH)
                    @case(1)
                    <option value="1" selected>Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miercoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    @break
                    @case(2)
                    <option value="1">Lunes</option>
                    <option value="2" selected>Martes</option>
                    <option value="3">Miercoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    @break
                    @case(3)
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3" selected>Miercoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>  
                    @break
                    @case(4)
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miercoles</option>
                    <option value="4" selected>Jueves</option>
                    <option value="5">Viernes</option>  
                    @break
                    @case(5)
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miercoles</option>
                    <option value="4">Jueves</option>
                    <option value="5" selected>Viernes</option>  
                    @break
                    @default
                        
                @endswitch
            <select>

            <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-5 mt-5" type="submit" value="Guardar">
        </form>
    </div>
</x-app-layout>